<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
        Schema::create('blog', function($tbl){
            $tbl->increments('id');
            $tbl->string('judul');
            $tbl->string('kategori');
            $tbl->text('isi');
            $tbl->string('filePath');
            $tbl->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('blog');
    }
}
