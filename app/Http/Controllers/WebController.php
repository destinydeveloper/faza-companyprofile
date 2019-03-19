<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Home;
use App\Models\About_us;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Misi_content;


class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menu
        $data['menu1'] = Menu::find(1);
        $data['menu2'] = Menu::find(2);
        $data['menu3'] = Menu::find(3);
        $data['menu4'] = Menu::find(4);
        $data['menu5'] = Menu::find(5);
        $data['menu6'] = Menu::find(6);
        // Menu

        // Home
        $data['home'] = Home::find(1);
        // Home

        // About us
        $data['aboutUs'] = About_us::find(1);
        // About us

        //Visi
        $data['visi'] = Visi::find(1);
        //Visi

        // Misi
        $data['misi'] = Misi::find(1);
        // Misi

        // Content misi
        $data['misi_content'] = Misi_content::all();
        // Content misi

        return view('index', compact('data'));
    }

}