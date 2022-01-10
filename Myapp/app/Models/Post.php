<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // mengizinkan menggunakan mass assignment dengan cara mendeklarasikan nama kolom yang boleh diisi
    // protected $fillable = ['judul', 'partial', 'full'];

    // namun jika kolom banyak maka akan repot dalam mendeklarasikan, maka dari itu disarakan menggunakan guarded (kebalikan fillable)
    protected $guarded = ['id'];

    // menghubungkan tabel post dengan table category (join tabel)
    // nama function harus sama dengan nama table tujuan (category)
    public function category (){
        // lalu kita tentukan mau apa hubunan antara post dengan category
        /**
         * Jika hubungan nya one to one (belongsTo)
         * Jika hubungan nya ont to many (hasMany)
         * 
         * Pada kasus ini lebih tepat mengguakan hubangan one to one
         * Karena 1 postingan harus hanya memiliki 1 kategory
         */

         return $this->belongsTo(Category::class);

        //  untuk ngecek nya bisa ke artisan tinker lalu ambil salah satu postingan lalu panggil method category dengan cara $post = Post::first(), $post->category
    }

}


