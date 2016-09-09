<!DOCTYPE html>
<html>
<head>
	<title>Edited Artikel</title>
</head>
<body>
	@extends('app')
	@section('content')
		<h1>Edited Artikel</h1>

		<hr>
 	{{Session::get('message')}}
		{!! Form::open(['url' => 'artikel/update']) !!}
			
			<div class="row col-sm-8">
				<div class="form-group ">
				{!! Form::label('judul','Judul Artikel :') !!}
				{!! Form::text('judul',$data->judul, array('
				class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('penulis','Penulis :') !!}
				{!! Form::text('penulis',$data->penulis, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('tgl_terbit','Tanggal Terbit :') !!}
				{!! Form::text('tgl_terbit',$data->tgl_terbit, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('penerbit','Penerbit :') !!}
				{!! Form::text('penerbit',$data->penerbit, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('isi','Isi :') !!}
				{!! Form::textarea('isi',$data->isi, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('tebel_buku','Tebel Buku :') !!}
				{!! Form::text('tebel_buku',$data->tebel_buku, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('dimensi','Dimensi :') !!}
				{!! Form::text('dimensi',$data->dimensi, array(
				'class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('harga','Harga Buku :') !!}
				{!! Form::text('harga',$data->harga, array('class'=>'form-control input-sm','required')) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Update',array('class'=>'btn btn-primary btn-sm')) !!}
			</div>			
			</div>
			
			
			{!! Form::close() !!}				
		@stop
 
</body>
</html>