<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\History;
use File;
use Image;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contact'] = Contact::findOrFail(1);
        return view('admin.contact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
        // return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|max:100',
            'email' => 'required',
            'telp' => 'required|max:15',
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
            'logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $logo = null;

            if ($request->hasFile('logo')) {
                $logo = $this->saveLogo('logo', $request->file('logo'));
            }

            Contact::create([
                'address' => $request->address,
                'email' => $request->email,
                'telp' => $request->telp,
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'instagram_link' => $request->instagram_link,
                'logo' => $logo,
                'path' => '/uploads/contact/',
            ]);

            return redirect()->route('contact.index')
                             ->with(['success' => 'Data berhasil ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['contact'] = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userLogin = Auth::user();

        $request->validate([
            'address' => 'required|max:100',
            'email' => 'required',
            'telp' => 'required|max:15',
            'facebook_link' => 'required',
            'twitter_link' => 'required',
            'instagram_link' => 'required',
            'logo' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $contact = Contact::findOrfail($id);

            $logo = $contact->logo;

            if ($request->hasFile('logo')) {
                !empty($logo) ? File::delete(public_path('uploads/contact/' . $logo)) : null;
                $logo = $this->saveLogo('logo', $request->file('logo'));
            }

            $contact->update([
                'address' => $request->address,
                'email' => $request->email,
                'telp' => $request->telp,
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'instagram_link' => $request->instagram_link,
                'logo' => $logo,
                'path' => "/uploads/contact/"
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "melakukan perubahan pada <b>KONTAK KAMI</b>"
            ]);

            return redirect()->route('contact.index')
                             ->with(['success' => 'Data berhasil diubah']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function saveLogo($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/contact');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(348, 112)->save($path . '/' . $images);
        return $images;
    }
}
