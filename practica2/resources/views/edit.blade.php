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
            <form action="" method="POST">
                @csrf    
                <div class="form-group">
                    <label for="titulo">Serie</label>
                    <input type="text" class="form-control" name="serie" value="{{$comic->serie}}">
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" value="{{$comic->titulo}}">
                </div>
                <div class="form-group">
                    <label for="tomos">Tomos</label>
                    <input type="text" class="form-control" name="tomos" value="{{$comic->tomos}}">
                </div>
                <div class="form-group">
                    <label for="año">Año</label>
                    <input type="text" class="form-control" name="año" value="{{$comic->año}}">
                </div>
                <div class="form-group">
                    <label for="dibujo">Dibujo</label>
                    <input type="text" class="form-control" name="dibujo" value="{{$comic->dibujo}}">
                </div>
                <div class="form-group">
                    <label for="guion">Guión</label>
                    <input type="text" class="form-control" name="guion" value="{{$comic->guion}}">
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial</label>
                    <input type="text" class="form-control" name="editorial" value="{{$comic->editorial}}">
                </div>
                <div class="form-group">
                    <label for="resumen">Resumen</label>
                    <input type="text" class="form-control" name="resumen" value="{{$comic->resumen}}">
                </div>
                <div class="Resumen">
                    <label for="ruta_imagen">Ruta de la imagen</label>
                    <input type="text" class="form-control" name="ruta_imagen" value="{{$comic->ruta_imagen}}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

@stop
