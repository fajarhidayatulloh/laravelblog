<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        //
        $data=User::all();
        $data=User::orderBy('id','desc')->paginate(3);
        return view('regis.index',compact('data'));
    }
    public function create(){
        return view('auth.register');
    }
}
