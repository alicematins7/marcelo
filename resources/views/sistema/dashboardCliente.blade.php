@extends('sistema.layout')
@section('title','Dashboard | Estragou, e agora?')
@section('content')
    <div class="row">
        <div class="col-sm-5">
            <p class="h1 text-start" id="titulo" style="font-size: 150px; margin-left: 90px; margin-top: 100px"><b>Estragou</b></p>
            <p class="h1 text-start" id="titulo" style="font-size: 150px; margin-left: 90px"><b>e agora?</b></p>
            <p class="h6 text-start" style="color: #3C5BBF; font-size: 30px; margin-left: 90px; margin-bottom: 10px"><b>Consertos rápidos, resultados duradouros</b></p>
        </div>
        <div class="col-sm-7">
            <img src="{{asset('storage/imagens/bichoAuth.png')}}" style="" />
        </div>
    </div>
@endsection