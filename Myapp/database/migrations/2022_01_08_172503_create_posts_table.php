<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            /**
             * syntax penulisan database :
             * blueprint->tipedata('nama kolom')->atribut tambahan (null atau apapun)
             */
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('partial');
            $table->text('full');
            $table->string('penulis');
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
            // jika sudah siap, tinggal lakukan migration
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
