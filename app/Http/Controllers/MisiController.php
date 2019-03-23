<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misi;
use App\Models\Misi_content;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['misi_content'] = Misi_content::all();

        $data['misi'] = Misi::findOrFail(1);
        return view('admin.misi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
        // return view('admin.misi.create');
    }

    public function createContent()
    {
        $data['misi_content'] = Misi_content::all();
        return view('admin.misi.create_content', compact('data'));
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
            'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'title' => 'required | max:20',
        ]);

        try {
            $photo = null;

            if ($request->hasFile('photo')) {
                $photo = $this->saveFile('misi', $request->file('photo'));
            }

            Misi::create([
                'title' => $request->title,
                'path' => '/uploads/misi/',
                'photo' => $photo,
            ]);

            return redirect()->route('misi.index')
                             ->with(['success' => 'Data berhasil ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }


    public function storeContent(Request $request)
    {
        $misi = Misi::findOrFail(1);

        $request->validate([
            'description' => 'required',
        ]);

        try {
            Misi_content::create([
                'id_misi' => $misi->id,
                'description' => $request->description,
            ]);

            return redirect()->route('misi.create_content')
                             ->with(['success' => 'Data berhasil ditambahkan']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
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
        $data['misi'] = Misi::findOrFail($id);
        return view('admin.misi.edit', compact('data'));
    }

    public function editContent($id)
    {
        $data['misi_content'] = Misi_content::all();

        $data['misi_edit'] = Misi_content::findOrFail($id);
        return view('admin.misi.edit_content', compact('data'));
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
        $request->validate([
            'photo' => 'nullable|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'title' => 'required | max:20',
        ]);

        try {
            $misi = Misi::findOrfail($id);

            $photo = $misi->photo;

            if ($request->hasFile('photo')) {
                !empty($photo) ? File::delete(public_path('uploads/misi/' . $photo)) : null;
                $photo = $this->saveFile('misi', $request->file('photo'));
            }

            $misi->update([
                'title' => $request->title,
                'photo' => $photo,
            ]);

            return redirect()->route('misi.index')
                             ->with(['success' => 'Data berhasil dirubah']);
        } catch (\Exception $e) {
            return redirect()->back()
                   ->with(['error' => $e->getMessage()]);
        }
    }

    public function updateContent(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
        ]);

        try {
            $misi_content = Misi_content::findOrfail($id);

            $misi_content->update([
                'description' => $request->description,
            ]);

            return redirect()->route('misi.index')
                             ->with(['success' => 'Konten berhasil dirubah']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
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

    public function destroyContent($id)
    {
        try{
            Misi_content::findOrfail($id)->delete();
            return redirect()->route('misi.index')
                             ->with(['success' => 'Konten berhasil dihapus']);
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/misi');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(555, 371)->save($path . '/' . $images);
        return $images;
    }
}
