<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show method..
    public function show(){
        return view('post');
    }
}
