@extends('template')
@section('content')
<title>Laboratorium Pengembangan Internet Universitas Gunadarma 2015</title>
    <div class="col-sm-8">
        <div id="judul">
            <marquee onmouseover="this.stop()" onmouseout="this.start()">
            @foreach($data as $reg)
            <a href="{{url('artikel',$reg->id)}}">
                {{$reg->judul }}</a> | @endforeach</marquee>
        </div>
            @foreach($data as $reg)

                <div id="judul">
                    <h3><a href="{{url('artikel',$reg->id)}}">{{$reg->judul }}</a></h3>
                </div>
                <div id="panel-body">
                    created at {{$reg->created_at}} <br>
                     <a href="{{url('artikel',$reg->id)}}">
                        <img src="{{asset('images/'.$reg->filePath) }}" width="300" height="150" alt="aaaa">
                    </a>
                    <p>{!!substr($reg->isi,0,235)!!}..</p><br>

                </div>
                <hr>
            @endforeach
            {!! $data->render()!!}
    </div>
    <div class=" row col-sm-4">
        <div id="judul"><center>Judul</center></div>
            @foreach($data as $reg)
            <div id="sidebar">
                <a href="">{{$reg->judul }}</a>
            </div>
            @endforeach
        </div>
    </div>

@endsection
