	@extends('app')
	@section('content')
	<title>Info Buku Lapnet</title>
		<h1>Info Buku Lapnet</h1>
		<a href="{{URL::to('artikel/create')}}">Tambah Info Buku</a>
		<hr>
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Tanggal Terbit</th>
				<th>Penerbit</th>
				<th>Isi</th>
				<th>Tebel Buku</th>
				<th>Dimensi</th>
				<th colspan="2">Operator</th>
			</tr>
			<?php $count=1; ?>
				@foreach($data as $reg)
			<tr>
				<td>{{ $count}}</td>
				<td>{{ $reg->judul}}</td>
				<td>{{ $reg->penulis}}</td>
				<td>{{ $reg->tgl_terbit}}</td>
				<td>{{ $reg->penerbit}}</td>
				<td>{!!substr($reg->isi,0,235)!!}</td>
				<td>{{ $reg->tebel_buku}}</td>
				<td>{{ $reg->dimensi}}</td>
				<td><a href="{{URL::to('artikel/edit/')}}/{{ $reg->id }}" title="Ubah" class="btn btn-primary btn-xs">Edit</a></td>
				<td><a href="{{ URL::to('artikel/delete/') }}/{{ $reg->id }}" title="Hapus" class="btn btn-danger btn-xs" onclick="javascript:return confirm('Anda Yakin Hapus?')">Delete</a></td>

			</tr>
			<?php $count++; ?>
			@endforeach

		</table>
		{!! $data->render()!!}
@stop
