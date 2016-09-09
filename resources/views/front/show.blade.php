@extends('template')
@section('content')
<title>{{$reg->judul}}</title>
	<div class="col-sm-8">
		<div id="panel-body">
            created at {{$reg->created_at}} <br>
            <h3>{{$reg->judul}}</h3>
                <img src="{{asset('images/'.$reg->filePath) }}" width="600" height="300" alt="{{$reg->judul}}"></a>
                <p>{{$reg->isi}}</p>
                <strong>Spesifikasi Buku</strong><br>
                Judul Buku      : {{$reg->judul}} <br>
                Penulis Buku    : {{$reg->penulis}} <br>
                Penerbit Buku   : {{$reg->penerbit}} <br>
                Tanggal Terbit  : {{$reg->tgl_terbit}} <br>
                Tebal Halaman   : {{$reg->tebel_buku}} <br>
                Dimensi Buku    : {{$reg->dimensi}} <br>
                Harga Buku      : Rp. {!! number_format($reg->harga,2,",",".")!!}
                <br><br>
        </div> 
        <hr> 
    </div>
@endsection