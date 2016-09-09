<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InfoBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('info_buku',function(Blueprint $tbl){
            $tbl->increments('id');
            $tbl->string('judul');
            $tbl->string('penulis');
            $tbl->string('penerbit');
            $tbl->string('tgl_terbit');
            $tbl->text('isi');
            $tbl->string('filePath');
            $tbl->string('tebel_buku');
            $tbl->string('dimensi');
            $tbl->integer('harga');
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
        Schema::drop('info_buku');
    }
}
