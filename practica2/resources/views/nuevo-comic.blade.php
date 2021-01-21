@extends('layouts.default')
@section('content')
<div class="w-content">
    <br>
<h1 class="big_ttl">Agrega cómic</h1>
    <br>
    <div class="row margin_top_comics">
        <div class="col-sm-6 col-md-6">
            <div class="gray_add_file">
            <!-- <input type="file" id="myfile" name="myfile"> -->
            <img src="{{url('/images/add-file.svg')}}" alt="">
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Serie</label>
                    <input name="serie" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Título</label>
                    <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tomos</label>
                    <input name="tomos" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Año</label>
                    <input name="año" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Dibujo</label>
                    <input name="dibujo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Guión</label>
                    <input name="guion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Editorial</label>
                    <input name="editorial" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Resumen</label>
                    <input name="resumen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Imagen</label>
                    <input name="ruta_imagen" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@stop