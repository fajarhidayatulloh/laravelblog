<!DOCTYPE html>
<html>
<head>
	<title>Tambah Info Buku</title>
</head>
<body>
	@extends('app')
	@section('content')
		<h1>Create Info Buku</h1>

		<hr>
 	{{Session::get('message')}}
		{!! Form::open(['url' => 'artikel/store','files'=>true]) !!}
			
			<div class="row col-sm-8">
				<div class="form-group ">
				{!! Form::label('judul','Judul Artikel :') !!}
				{!! Form::text('judul',null, array('
				class'=>'form-control input-sm','placeholder' => 'Judul Artikel', 'required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('penulis','Penulis :') !!}
				{!! Form::text('penulis',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : Fajar Hidayatulloh','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tgl_terbit','Tanggal Terbit :') !!}
				{!! Form::text('tgl_terbit',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : 12 Desember 2012','required')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('penerbit','Penerbit :') !!}
				{!! Form::text('penerbit',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : Gramedia','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('isi','Deskripsi Isi :') !!}
				{!! Form::textarea('isi',null, array('class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('image','Choose An Images :') !!}
				{!! Form::file('image') !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('tebel_buku','Tebel Buku :') !!}
				{!! Form::text('tebel_buku',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : 140 Halaman','required')) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('dimensi','Dimensi :') !!}
				{!! Form::text('dimensi',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : 14 x 12 cm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('harga','Harga Buku :') !!}
				{!! Form::text('harga',null, array('class'=>'form-control input-sm',
				'placeholder' => 'Contoh : 150000','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Publish',array('class'=>'btn btn-primary btn-sm')) !!}
			</div>			
			</div>
			
			
			{!! Form::close() !!}				
		@stop
 
</body>
</html>