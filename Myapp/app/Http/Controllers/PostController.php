<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import models
use App\Models\Post;

class PostController extends Controller
{
    // kita bilkin method default
    public function index (){
        return view('blog', [
            'logo' => 'logo.png',
            'title' => 'Post',
            'posts'=> Post::all()
        ]);
    }

    public function show ($id){
        return view('post', [
            'logo' => 'logo.png',
            'title' => 'Post',
            'post' => Post::find($id)
        ]);
    }
}
