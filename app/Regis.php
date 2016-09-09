<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regis extends Model
{
    //
    protected $table='register';
    protected $fillable=['fullname','username','email','password','confirm_pw'];
}
