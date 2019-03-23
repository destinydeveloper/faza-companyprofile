<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Video;
use App\User;
use App\Models\Menu;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jml_foto_video = count(Photo::all()) + count(Video::all());
        $jml_user = count(User::all());
        $jml_menu = count(Menu::all());
        return view('admin.index', compact(['jml_foto_video', 'jml_user', 'jml_menu']));
    }
}
