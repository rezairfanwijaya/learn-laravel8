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

}


