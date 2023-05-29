@extends('sistema.layout')
@section('title','Home | Estragou, e agora?')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <p class="h1 text-start" style="font-size: 120px; margin-left: 90px; margin-top: 40px; font-weight: bolder ">Estragou</p>
            <p class="h1 text-start" style="font-size: 120px; margin-left: 90px"><b>e agora?</b></p>
            <p class="h6 text-start" style="color: #3C5BBF; font-size: 30px; margin-left: 90px; margin-bottom: 10px"><b>Consertos rápidos, resultados duradouros</b></p>
        </div>
        <div class="col-sm-6" style="position:relative">
            <img src="{{asset('storage/imagens/bicho.png')}}" style="height: 800px; margin-left: 80px" />
        </div>
        <div style="position:absolute">
                <img src="{{asset('storage/imagens/onda.png')}}" style="width: 1900px"/>
        </div>
    </div>
@endsection