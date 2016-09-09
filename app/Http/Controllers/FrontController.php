<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Info_buku;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Input;


class FrontController extends Controller
{
    public function index()
    {
        //
        $this->data['data']=Info_buku::all();
        $this->data['data']=Info_buku::orderBy('id','desc')->paginate(3);
        return view('front.index',$this->data);
    }
    public function artikel($id) {
        $this->data['reg']=Info_buku::find($id);
        return view('front.show',$this->data);
    }
    
}
