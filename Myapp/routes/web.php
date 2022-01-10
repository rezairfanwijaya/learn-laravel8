<?php

// include controllers 
use App\Http\Controllers\PostController;
use App\Models\Category;
// include class
use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
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

// route history
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
// rout ini saya pindahkan return nya ke controllers dan saya ganti cara penulisanny sesuai dengan carap penulisan menggunakan controllers
// Route::get('/blog', function () {

//     return view('blog', [
//         'logo' => 'logo.png',
//         'title' => 'Post',
//         'posts'=> Post::all()
//     ]);
// });

// rout blog menggunakan controllers
Route::get('/blog', [PostController::class, 'index']);


// route untuk detail artikel
// route ini penulisannya akan saya ganti sesuai dengan controllers yang saya gunakan
// Route::get('/posts-{slug}', function($slug){

    // ambil slug nya
    // $new_post = [];
    // foreach ($data_post as $post){
    //     if ($post["slug"] === $slug){
    //         $new_post = $post;
    //     }
    // }

// kode ini akan saya pindahkan ke controller dengan function show
    // return view('post', [
    //     'logo' => 'logo.png',
    //     'title' => 'Post',
    //     'post' => Post::find($slug)
    // ]);

// });

// Route detail artikel
// post:slug berarti kita mengambil slug dari post yang kita klik
Route::get('/posts-{post:slug}', [PostController::class, 'show']);



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

// Route unutk category
Route::get('/categories-{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->nama,
        'posts' => $category->post,
        'logo' => 'logo.png',
        'category' =>$category->nama
    ]);

});

// Route untuk daftar list kategori
Route::get('/categories', function(){
     
    return view('categories',[
        'title' => 'Categories',
        'logo' => 'logo.png',
        'categories' => Category::all()
    ]);

});

