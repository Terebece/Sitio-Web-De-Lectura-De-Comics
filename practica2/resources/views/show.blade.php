@extends('layouts.default')
@section('content')

<div class="w-content">
    <div class="row margin_top_comics">
        <div class="col-sm-6 col-md-6">
            <div class="gray_add_file">
                <img src="/images/{{$comic->ruta_imagen}}" alt="">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <p>Nombre: {{$comic->titulo}}</p>
            <p>Guion: {{$comic->guion}}</p>
            <p>Dibujo: {{$comic->dibujo}}</p>
            <p>Año:{{$comic->año}}</p>
            <p>Tomos: {{$comic->tomos}}</p>
            <p>Editorial: {{$comic->editorial}}</p>
            <p>Resumen: {{$comic->resumen}}</p>

            <a href="/show/{{$comic->id}}/edit" class="btn btn-info">Editar</a> 
                 
            <a href="/show/{{$comic->id}}/delete" class="btn btn-danger">Eliminar</a>
            
        </div>
        
    </div>
</div>

@stop