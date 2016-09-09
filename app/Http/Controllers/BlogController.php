<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info_buku;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Input;
use Session;
use Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //membuat fungsi tampil data
        $data=Info_buku::all();
        $data=Info_buku::orderBy('id','desc')->paginate(3);
        return view('blog.data',compact('data'));
    }

    public function create()
    {
        //
        return view('blog.create');
    }

    public function store(Request $request)
    {
        //membuat fungsi input
        $data=new Info_buku();
        $this->validate($request, [
            'image' => 'required'
        ]);
        $data->judul=$request->input('judul');
        $data->penulis=$request->input('penulis');
        $data->penerbit=$request->input('penerbit');
        $data->tgl_terbit=$request->input('tgl_terbit');
        $data->isi=$request->input('isi');
        $data->tebel_buku=$request->input('tebel_buku');
        $data->dimensi=$request->input('dimensi');
        $data->harga=$request->input('harga');
        if($request->hasFile('image')) {
            $file = Input::file('image');
            $name = time(). '-' .$file->getClientOriginalName();
            $data->filePath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $data->save();
        Session::flash('message','Data Berhasil di input');
        return redirect('artikel/create');
    }

    public function edit($id)
    {
        //membuat fungsi edit
        $data=Info_buku::find($id);
        return view('blog.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        //membuat fungsi update
        $data=new Info_buku();
        $data->judul=$request->input('judul');
        $data->kategori=$request->input('tgl_terbit');
        $data->kategori=$request->input('penerbit');
        $data->isi=$request->input('isi');
        $data->kategori=$request->input('tebel_buku');
        $data->kategori=$request->input('dimensi');
        $data->save();
        Session::flash('message','Data Berhasil di update');
        return redirect('artikel/edit');
    }

    public function destroy($id)
    {
        //membuat fungsi delete
        Info_buku::find($id)->delete();
        return redirect('/artikel');
    }
}
