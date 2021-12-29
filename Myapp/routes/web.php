<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
// import class use dari models dengan cari manual atau bisa klik kanan import all class (pakai extention php namespace resolver) tetapi kita harus memanggil class nya dulu (saya memanggila class nya di routes blog pada index posts)


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route landing page
Route::get('/history', function () {
    // return ('hallo reza');
    $nama = "Reza";
    return view('history', [
        'nama' => $nama,
        'logo' => 'logo.png',
        'title' => 'History'
    ]);
});

// route home
Route::get('/', function () {
    return view('home', [
        'logo' => 'logo.png',
        'title' => 'Home'
    ]);
});

// route about
Route::get('/about', function () {
    return view('about', [
        'name' => 'Valerie',
        'gmail' => 'valerie@gmail.com',
        'photo' => 'valerie.jpg',
        'logo' => 'logo.png',
        'title' => 'About'
    ]);
});

// route blog
Route::get('/blog', function () {

    return view('blog', [
        'logo' => 'logo.png',
        'title' => 'Post',
        'posts'=> Post::all()
    ]);
});


// route untuk detail artikel
Route::get('/posts-{slug}', function($slug){

    // ambil slug nya
    // $new_post = [];
    // foreach ($data_post as $post){
    //     if ($post["slug"] === $slug){
    //         $new_post = $post;
    //     }
    // }


    return view('post', [
        'logo' => 'logo.png',
        'title' => 'Post',
        'post' => Post::find($slug)
    ]);

});


// route note
Route::get('/note', function () {
    return view('notes', [
        'logo' => 'logo.png',
        'title' => 'Note'
    ]);
});


// route profile
Route::get('/profile', function () {

    // memberi isi pada variable
    $nama = 'Reza';

    // lalu lempar $nama ke view profile dengan cara membuat array
    return view('profile', [
        'nama' => $nama,
        'logo' => 'logo.png',
        'title' => 'Profile'
    ]);

    // selain menggunakan array , kita juga bisa menggunakan compact 
    // asalkan nama variable nya sama

    // maksud dari compact adalah untuk mempersingkat penulisan array (untuk index dan value yang sama), sehingga kita hanya tinggal mengirim parameter ke funtion compact berupa stiring dari nama variable

    // compact('nama') = ['nama' => $nama]

    // contoh penggunaan
    // return view('profile',compact('nama'));

    // jadi kalau kira memakai compact kita tidak bisa mengcustom nama index dalam array

});

// Route::get('/test', function () {
    
//     return view('1.2.3.file');

// });
