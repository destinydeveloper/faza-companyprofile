<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::all();
        return view('admin.menu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
        // return view('admin.menu.create');
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
            'title' => 'required|min:4',
            'sub_title' => 'required',
        ]);

        Menu::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
        ]);

        try {
            return redirect()->route('menu.index')
            ->with(['success' => 'Data berhasil Ditambahkan']);
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
        $data['menu'] = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('data'));
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

        $menu = Menu::findOrFail($id);

        $request->validate([
            'title' => 'required|min:4',
            'sub_title' => 'required',
        ]);

        try {

        $menu->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
        ]);

        History::create([
            'id_user' => $userLogin->id,
            'user_history' => "melakukan perubahan pada menu ". $request->title
        ]);

            return redirect()->route('menu.index')
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
        Menu::findOrFail($id)->delete();
        return redirect()->back()->with(['success' => 'Data Telah Dihapus!']);
    }
}
