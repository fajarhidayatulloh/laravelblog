<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_buku extends Model
{
    //
    protected $table='info_buku';
    protected $fillable=['judul','penulis','penerbit','tgl_terbit','isi','image','tebel_buku','dimensi','harga'];
}
