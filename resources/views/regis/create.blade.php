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
		{!! Form::open(['url' => 'user/store']) !!}
			
			<div class="row col-sm-4">
				<div class="form-group ">
				{!! Form::label('fullname','FullName :') !!}
				{!! Form::text('fullname',null, array('class'=>'form-control input-sm','placeholder' => 'Fullname', 'required')) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('username','Username :') !!}
				{!! Form::text('username',null, array('class'=>'form-control input-sm','placeholder' => 'Username' , 'required')) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('email','Email :') !!}
				{!! Form::email('email',null, array('class'=>'form-control input-sm','placeholder' => 'contoh: example@gmail.com', 'required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password','Password :') !!}
				{!! Form::password('password', array('class'=>'form-control input-sm','placeholder' => 'Password', 'required')) !!}
			</div>
				
			<div class="form-group">
				{!! Form::label('confirm_pw','Confirm Password :') !!}
				{!! Form::password('confirm_pw', array('class'=>'form-control input-sm','placeholder' => 'Confirm Password', 'required')) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Tambah Data',array('class'=>'btn btn-primary btn-sm')) !!}
			</div>			
			</div>
			
			
			{!! Form::close() !!}				
		@stop
 
</body>
</html>