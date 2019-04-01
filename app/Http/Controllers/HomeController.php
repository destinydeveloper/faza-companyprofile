<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['home'] = Home::find(1);
        return view('admin.home.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
        // return view('admin.home.create');
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
            'logo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'background_photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'title' => 'required',
            'description' => 'required',
        ]);

        try {
            $logo = null;
            $background_photo = null;

            if ($request->hasFile('logo')) {
                $logo = $this->saveLogo('logo', $request->file('logo'));
            }

            if ($request->hasFile('background_photo')) {
                $background_photo = $this->saveFile('background-photo', $request->file('background_photo'));
            }


            Home::create([
                'title' => $request->title,
                'description' => $request->description,
                'path' => public_path('uploads/home'),
                'photo' => $logo,
                'background_photo' => $background_photo,
            ]);

            return redirect()->route('home.index')
                ->with(['success' => 'Data berhasil ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['home'] = Home::find($id);
        return view('admin.home.edit', compact('data'));
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
        $this->validate($request, [
            'logo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'background_photo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'title' => 'required',
            'description' => 'required | max:100',
        ]);

        try {
            $home = Home::findOrFail($id);

            $logo = $home->photo;
            $background_photo = $home->background_photo;

            if ($request->hasFile('logo')) {
                !empty($logo) ? File::delete(public_path('uploads/home/' . $logo)) : null;
                $logo = $this->saveLogo('logo', $request->file('logo'));
            }

            if ($request->hasFile('background_photo')) {
                !empty($background_photo) ? File::delete(public_path('uploads/home/' . $background_photo)) : null;
                $background_photo = $this->saveFile('background-photo', $request->file('background_photo'));
            }

            $home->update([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $logo,
                'background_photo' => $background_photo,
            ]);

            return redirect(route('home.index'))
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
        $user = User::findOrFail($id);
        if (!empty($user->photo)) {
            File::delete(public_path('uploads/users/' . $user->photo));
        }
        $user->delete();

        return redirect()->back()->with(['success' => $user->name. 'Telah Dihapus!']);
    }

    private function saveLogo($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/home');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(348, 112)->save($path . '/' . $images);
        return $images;
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/home');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->save($path . '/' . $images);
        return $images;
    }
}
