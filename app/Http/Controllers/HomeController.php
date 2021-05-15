<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    private $menus;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->menus =  Menu::get('name')->all();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = $this->menus;
        return view('home',compact('menus'));
    }
}
