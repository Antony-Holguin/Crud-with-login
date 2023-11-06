@extends('layouts.app')

@section('titulo')
    Crear tarea
@endsection()

@section('contenido')
<div class="row">
    <div class="col">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h2>Formulario</h2>
                    </div>
                    <form action="{{route('tarea.update', $tarea->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3 d-md-flex justify-content-center align-items-center">
                            <div class="col col-md-6">
                               

                                <div class="input-group">
                                    <label for="titulo" class="input-group-text">Titulo de la tarea:</label>
                                    <input  value="{{$tarea->titulo}}" type="text" class="form-control" name="titulo" id="titulo">
                                </div>
                                @error('titulo')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <label for="titulo" class="form-label">Descripcion de la tarea: </label>
                                    <textarea  name="descripcion" class="form-control" id="descripcion" rows="1"
                                        cols="10">{{$tarea->descripcion}}</textarea>
                                </div>
                                @error('descripcion')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <h3>Imagen cargada</h3>
                            <div class="image rounded w-25">
                                <img   height="100%" width="100%" src="{{$tarea->imagen}}" alt="">
                            </div>

                        </div>
                        <div class="card-footer ">
                            {{-- <button class="btn btn-success col-auto" type="submit">Crear tareas</button> --}}
                            {{-- <a class="btn btn-secondary" href="{{route('tarea.update', $tarea->id)}}">Actualizar</a> --}}
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()