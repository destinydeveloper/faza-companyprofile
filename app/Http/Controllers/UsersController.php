<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\History;
use File;
use Image;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLogin = Auth::user();

        if ($userLogin->status == 0) {
            $data['users'] = User::query()->where('status', '=', 0)->get();
        } else {
            $data['users'] = User::all();
        }

        return view('admin.users.index', compact('data', 'userLogin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'password' => 'required | string | min:8 | confirmed',
        ]);

        try {
            $photo = null;
            if ($request->hasFile('photo')) {
                $photo = $this->saveFile($request->name, $request->file('photo'));
            }
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'email' => $request->email,
                'photo' => $photo,
                'status' => 0,
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "menambahkan <b>PENGGUNA</b> ". $request->username
            ]);

            return redirect()->route('users.index')
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
        $data['users'] = User::find($id);
        return view('admin.users.edit', compact('data'));
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
            // 'password' => 'required | string | min:8 | confirmed',
        ]);

        try {
            $user = User::findOrFail($id);
            $photo = $user->photo;

            if ($request->hasFile('photo')) {
                !empty($photo) ? File::delete(public_path('uploads/users/' . $photo)) : null;
                $photo = $this->saveFile($request->name, $request->file('photo'));
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'photo' => $photo
            ]);

            History::create([
                'id_user' => $userLogin->id,
                'user_history' => "melakukan perubahan pada <b>PENGGUNA</b> ". $request->username
            ]);

            return redirect(route('users.index'))
                ->with(['success' => 'Data berhasil Diedit']);
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

        $user = User::findOrFail($id);
        if (!empty($user->photo)) {
            File::delete(public_path('uploads/users/' . $user->photo));
        }

        History::create([
            'id_user' => $userLogin->id,
            'user_history' => "menghapus <b>PENGGUNA</b> ". $user->username
        ]);

        $user->delete();

        return redirect()->back()->with(['success' => 'Data berhasil dihapus']);
    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/users');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        Image::make($photo)->resize(150, 150)->save($path . '/' . $images);
        return $images;
    }

    public function showChangePassword() {
        return view('admin.change_password');
    }

    public function changePassword(Request $request) {
        $login = Auth::user();

        $request->validate([
            'oldPassword' => 'required',
            'password' => 'required | string | min:8 | confirmed',
        ]);

        $username = $request->username;
        $oldPassword = $request->oldPassword;

        if ($username == $login->username && Hash::check($oldPassword, $login->password)) {
            $user = User::findOrFail($login->id);

            $user->update([
                'password' => bcrypt($request->password),
            ]);

            return redirect(route('users.showChange'))
                   ->with(['success' => 'Password berhasil dirubah']);
            } else {
            return redirect(route('users.showChange'))
                   ->with(['error' => 'Ubah password gagal']);
        }
    }
}
