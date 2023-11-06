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
                                    <input value="{{old('titulo')}}" type="text" class="form-control" name="titulo"
                                        id="titulo">
                                </div>
                                @error('titulo')
                                <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col col-md-6">
                                <div class="input-group">
                                    <label for="titulo" class="form-label">Descripcion de la tarea: </label>
                                    <textarea name="descripcion" class="form-control" id="descripcion" rows="1"
                                        cols="10">{{old('descripcion')}}</textarea>
                                </div>
                                @error('descripcion')
                                <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>


                        </div>

                        <div class="row">

                            <div class="col col-auto">
                                <div class="input-group">
                                    <label for="titulo" class="input-group-text">Imagen</label>
                                    <input name="file" type="file" accept="image/*" class="form-control">
                                </div>
                                @error('file')
                                <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-success col-auto" type="submit">Crear tareas</button>
                            <a class="btn btn-secondary" href="{{route('dashboard.index')}}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col text-center">
        <h1 class="display-6">Segundo formulario</h1>
    </div>
</div>



<form action="" class="row">
    <div class="form-input col-12 col-md-5 text-center">
        <small>Nombre</small>
        <input class="form-control form-control-sm" type="text" id="nombres" placeholder="Ingresa el nombre">
    </div>
    <div class="form-group col-12 col-md-5 text-center">
        <small>Apellido</small>
        <input class="form-control form-control-sm" type="text" id="apellidos">
    </div>
    <div class="form-group col-12 col-md-2">
        <select class="form-select form-select-sm" name="listado" id="">
            <option value="1">Uno</option>
            <option value="2">Dos</option>
            <option value="3">Tres</option>
        </select>
    </div>

    <div class="col">
        <div class="form-check">
            <label for="" class="form-check-label">Si</label>
            <input  class="form-check-input" type="checkbox" name="" id="">
        </div>
    </div>

</form>


@endsection()