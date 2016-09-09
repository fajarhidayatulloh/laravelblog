	@extends('app')
	@section('content')
		<h1>Lapnet User</h1>
		<a href="{{URL::to('/auth/register')}}">Tambah User</a>
		<hr>
		<table class="table table-striped">
			<tr>
				<th>Id</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Email</th>
			</tr>
			<?php $count=1; ?>
				@foreach($data as $reg)
			<tr>
				<td>{{ $count}}</td>
				<td>{{ $reg->name}}</td>
				<td>{{ $reg->username}}</td>
				<td>{{ $reg->email}}</td>
			</tr>
			<?php $count++; ?>
			@endforeach

		</table>
		{!! $data->render()!!}
@stop
