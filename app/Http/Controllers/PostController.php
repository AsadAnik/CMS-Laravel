<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Using the Models..
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
    public function store(Request $request){

        $inputs = $request->validate([
            'title' => 'required | min:8 | max:200',
            'post_image' => 'file',
            'body' => 'required'
        ]);

        if($request->post_image){
            $inputs['post_image'] = $request->post_image->store('images');
        }

        auth()->user()->posts()->create($inputs);
        return back();
    }

    // Create Method..
    public function create(){
        return view('admin.posts.create');
    }


    // Index Method..
    public function index(){
        $posts = Post::all();
        return view('admin.posts.index')->with(['posts' => $posts]);
    }

}
