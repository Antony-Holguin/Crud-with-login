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
                    <form action="{{route('tarea.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 d-md-flex justify-content-center align-items-center">
                            <div class="col col-md-6">
                               

                                <div class="input-group">
                                    <label for="titulo" class="input-group-text">Titulo de la tarea:</label>
                                    <input disabled value="{{$tasks->titulo}}" type="text" class="form-control" name="titulo" id="titulo">
                                </div>
                                @error('titulo')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <label for="titulo" class="form-label">Descripcion de la tarea: </label>
                                    <textarea disabled name="descripcion" class="form-control" id="descripcion" rows="1"
                                        cols="10">{{$tasks->descripcion}}</textarea>
                                </div>
                                @error('descripcion')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>


                        </div>

                        <div class="row">
                            <h3>Imagen cargada</h3>
                            <div class="image rounded w-25">
                                <img height="100%" width="100%" src="{{$tasks->imagen}}" alt="">
                            </div>

                        </div>
                        <div class="card-footer ">
                            {{-- <button class="btn btn-success col-auto" type="submit">Crear tareas</button> --}}
                            <a class="btn btn-secondary" href="{{route('dashboard.index')}}">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()