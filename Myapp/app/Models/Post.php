<?php

namespace App\Models;

// FILE INI DIPAKAI JIKA KITA SUDAH MENGGUNAKAN DATABASE
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }


// FILE INI DIPAKAI JIKA KITA TIDAK MENGGUNAKAN DATABASE
class Post
{

    // bikin variable statis dan jadikan dia private untuk hanya bisa diakses oleh class ini saja
    private static $posts_blog = [
        [
            'judul' => 'Postingan Pertama',
            // slug sebagai id
            'slug' => 'postingan-pertama',
            'author' => 'Reza Irfan Wijaya',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ullam quis similique modi at provident. Sint necessitatibus animi odit dolorem quisquam. Amet aut vel optio perspiciatis illo harum quia, placeat neque delectus voluptatibus recusandae saepe voluptate minima esse non excepturi accusamus, ex laudantium maxime deserunt sunt temporibus quisquam iure? Fugiat modi dolores eum nihil reprehenderit perspiciatis eligendi quibusdam, at iste impedit nemo rem velit, labore voluptate accusantium. Voluptas ipsum repudiandae neque nobis? Corrupti, facere ipsum dolores quas similique hic impedit voluptas ut, nemo reiciendis consequatur modi dignissimos amet doloribus. Incidunt aliquam, dolorem, hic ut nisi fugiat dolores voluptas aliquid rem dignissimos in voluptatibus adipisci rerum distinctio culpa unde. Officiis quisquam quaerat iusto similique ab, mollitia, eveniet voluptas suscipit voluptate aliquam delectus quasi asperiores eaque excepturi debitis nemo voluptatem error quibusdam. Harum hic sit dolorum natus laboriosam. Laudantium voluptatibus culpa, impedit provident reprehenderit incidunt suscipit, aliquam placeat, dicta ad ipsum vel.'
        ],
        [
            'judul' => 'Postingan kedua',
            // slug sebagai id
            'slug' => 'postingan-kedua',
            'author' => 'Reza Abdas',
            'konten' => '
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, numquam? Sint voluptas modi praesentium minima accusamus? Asperiores velit magnam ullam iusto, modi qui nulla doloribus similique quasi aliquid eum totam saepe nostrum dicta fugit veritatis culpa? Tenetur, molestias maxime iure rem inventore excepturi deleniti similique corrupti repellat accusantium alias vel assumenda qui iusto laboriosam ad? Quos consequatur at alias laboriosam, quasi tenetur eveniet, non recusandae, ad necessitatibus placeat obcaecati in?'
        ]
    ];


    // function static untuk mengembalikan nilai data dari $posts_blog di atas
    public static function all(){
        // return self::$posts_blog;
        // PENERAPAN COLLECTION
        // jadikan dia collection dengan menambah collect
        return collect(self::$posts_blog);
    
    }


    // function static untuk mencari postingan yang di klik oleh user (single post) 
    public static function find($slug){

        // ambil dulu semua postingan
        // $posts = self::$posts_blog;
        // kita ga perlu menuliskan code ini ($posts = self::$posts_blog;)
        // kita ambil data post menggunakan function all yang telah kita buat, sekaligus untuk mengambil collection yang telah dibikin
        // pakai static ya soalnya dia function static, kalo yang atas pake self karena kita mereturn static property, jadi static::(untuk static function) dan self::(untuk static property/vairable)
        $post = static::all();
        // tempat untuk menampung hasil pencarian postingan (single post)
        // $post = []; 
        // kita looping data nya
        // foreach ($posts as $p){
            // kita cari postingan sesuai dengan yang di pilih user menggunakan slug
        //     if ($p["slug"] === $slug ){
        //         $post = $p;
        //     }
        // }

        // kembalikan hasil nya ke temoat penampungan
        // ganti logic diatas dengan memanfaatkan function dari collection yaitu firstwhere
        return $post->firstWhere('slug', $slug);


    }
}



