<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Eloquent ORM takes Post..
        $posts = Post::all();

        // One Way..
        // return view('home')->with(['posts' => $posts]);

        // Another Way..
        return view('home', ['posts' => $posts]);
    }
}
