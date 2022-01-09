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

    // ikat post kedalam Atribut class Post
    public function show (Post $post){
        return view('post', [
            'logo' => 'logo.png',
            'title' => 'Post',
            // post sudah otomatis sesuai yang kita klik,tanpa menggunakan query untuk find
            'post' => $post
        ]);
    }
}
