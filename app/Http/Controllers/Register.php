<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regis;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent;
use Session;
use Auth;

class Register extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $register=Regis::all();
        $register=Regis::OrderBy('id','desc')->paginate(3);
        return view('regis.index',compact('register'));
        
    }

    public function dashboard(){
        $register=Regis::all();
        $register=Regis::OrderBy('id','desc')->paginate(3);
        return view('regis.index',compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('regis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $register= new Regis();
        $register->fullname=$request->input('fullname');
        $register->username=$request->input('username');
        $register->email=$request->input('email');
        $register->password=md5($request->input('password'));
        $register->confirm_pw=md5($request->input('confirm_pw'));
        $register->save();
        Session::flash('message','Data Sudah Terinput');
        return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $register=Regis::find($id);
       return view('regis.edit',compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->input('id');
        $register=Regis::find($id);
        $register->fullname=$request->input('fullname',100);
        $register->username=$request->input('username',100);
        $register->email=$request->input('email',100);
        $register->save();
        Session::flash('message','Data Sudah Berhasil di Update');
        return view('regis.edit', compact('register'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        Regis::find($id)->delete();
        return redirect('/user');
    }
    public function logout(){
        
        return redirect('auth.login');
    }
    public function login(){
        if(Auth::guest()){
            return view('/auth/login');
        }else{
            return redirect('dashboard');
        }
    }

    public function checkLogin(request $request){
        $data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );

        if(Auth::attempt($data)){
            return redirect()->intended('dashboard');
        }else{
            return redirect('login');
            Session::flash('message','gagal Login');
        }
    }

    public function register(){
        $user=new User();
        $user->name=$request->input('name');
        $user->username=$request->input('username');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->confirm_password=$request->input('confirm_password');
        $user->save();
        return redirect('dashboard');
    }
}
