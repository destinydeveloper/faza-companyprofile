<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;
use App\Models\History;
use File;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['photo'] = Photo::all();
        return view('admin.photo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userLogin = Auth::user();

        $request->validate([
            'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $photo = null;

            if ($request->hasFile('photo')) {
                $photo = $this->saveFile('photo', $request->file('photo'));
            }

            Photo::create([
                'path' => '/uploads/photo/',
                'photo' => $photo,
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "menambahkan <b>FOTO</b>"
            ]);

            return redirect()->route('photo.index')
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
        $data['photo'] = Photo::findOrFail($id);
        return view('admin.photo.edit', compact('data'));
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
            'photo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        try {
            $photo = Photo::findOrfail($id);

            $dataPhoto = $photo->photo;

            if ($request->hasFile('photo')) {
                !empty($photo) ? File::delete(public_path('uploads/photo/' . $dataPhoto)) : null;
                $dataPhoto = $this->saveFile('photo', $request->file('photo'));
            }

            $photo->update([
                'photo' => $dataPhoto,
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "melakukan perubahan pada <b>FOTO</b> dengan ID ". $id
            ]);

            return redirect()->route('photo.index')
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
        $userLogin = Auth::user();

        try{
            Photo::findOrfail($id)->delete();

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "menghapus <b>FOTO</b> dengan ID ". $id
            ]);

            return redirect()->route('photo.index')
                             ->with(['success' => 'Data berhasil dihapus']);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/photo');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->save($path . '/' . $images);
        return $images;
    }
}
