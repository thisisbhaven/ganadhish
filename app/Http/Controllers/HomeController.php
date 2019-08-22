<?php

namespace App\Http\Controllers;

use App\Bappa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bappas = Bappa::all()->sortByDesc('votes');
        $no = 1;
        return view('home', compact('bappas', 'no'));
    }
}
