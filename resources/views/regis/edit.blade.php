<!DOCTYPE html>
<html>
<head>
	<title>Tambah User</title>
</head>
<body>
	@extends('app')
	@section('content')
		<h1>Create User</h1>

		<hr>
 	{{Session::get('message')}}
		{!! Form::open(array('url' => 'user/update-user')) !!}

			{!!Form::hidden('id', $register->id)!!}
			<div class="row col-sm-4">
				<div class="form-group ">
				{!! Form::label('fullname','Full Name :') !!}
				{!! Form::text('fullname',$register->fullname, array('class'=>'form-control input-sm', 'required')) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('username','Username :') !!}
				{!! Form::text('username',$register->username, array('class'=>'form-control input-sm', 'required' )) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('email','Email :') !!}
				{!! Form::email('email',$register->email, array('class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Tambah Data',array('class'=>'btn btn-primary btn-sm')) !!}
			</div>			
			</div>
			
			
			{!! Form::close() !!}				
		@stop
 
</body>
</html>