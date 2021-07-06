<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show method..
    // One way..
//    public function show($id){
//        $post = Post::findOrFail($id);
//        return view('post')->with(['post' => $post]);
//    }

    // Another way..
    // Show Method..
    public function show(Post $post){
          return view('post', ['post' => $post]);
    }

    // Store Method..
    public function store(){
        dd(request()->all());
    }

    // Create Method..
    public function create(){
        return view('admin.posts.create');
    }


}
