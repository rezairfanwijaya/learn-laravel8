<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // sama dengan model post, category juga harus didefinisikan relasi nya terhadap model post
    /**
     * Relasi yang cocok untuk category dengan post adalah one to many
     * karena satu kategori bisa memiliki banyak post
     * Jika hubungan nya one to one (belongsTo)
     * Jika hubungan nya ont to many (hasMany)
     */

     public function post(){
         return $this->hasMany(Post::class);
     }
}
