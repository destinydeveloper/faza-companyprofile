<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\History;
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
        $data = Home::all();
        return view('admin.home.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // abort(404);
        return view('admin.home.create');
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
            'caption' => 'required',
        ]);

        try {
            $photo = null;

            if ($request->hasFile('photo')) {
                $photo = $this->savePhoto('photo', $request->file('photo'));
            }


            Home::create([
                'photo' => $photo,
                'caption' => $request->caption,
                'path' => '/uploads/home/',
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "menambahkan data pada <b>HOME</b>"
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
        $userLogin = Auth::user();

        $this->validate($request, [
            'photo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'caption' => 'required | max:100',
        ]);

        try {
            $home = Home::findOrFail($id);

            $foto = $home->photo;

            if ($request->hasFile('photo')) {
                !empty($foto) ? File::delete(public_path('uploads/home/' . $foto)) : null;
                $foto = $this->savePhoto('photo', $request->file('photo'));
            }

            $home->update([
                'caption' => $request->caption,
                'photo' => $foto,
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "melakukan perubahan pada <b>HOME</b> dengan ID ". $id
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
        $userLogin = Auth::user();

        $home = Home::findOrFail($id);
        if (!empty($home->photo)) {
            File::delete(public_path('uploads/home/' . $home->photo));
        }

        History::create([
            'id_user' => $userLogin->id,
            'user_history' => "menghapus data pada <b>HOME</b> dengan ID ". $id
        ]);

        $home->delete();

        return redirect()->back()->with(['success' => 'Foto behasil dihapus']);
    }

    private function savePhoto($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/home');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(1280, 487)->save($path . '/' . $images);
        return $images;
    }
}
