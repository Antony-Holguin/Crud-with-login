@extends('layouts.app')

@section('titulo')
<h1>Dashboard</h1>
@endsection()

@section('contenido')
<nav class="nav row">

    <div class="col">
        Dashboard de {{auth()->user()->nombres}}
    </div>
    <div class="col-auto">
        <ul class="list-inline">
            <li class="nav-item">
                <form action="{{route('logout.store')}}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link bg-danger rounded text-white">
                        Log out
                    </button>
                </form>

            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col">

            <a class="btn btn-secondary" href="{{route('tarea.create')}}">
                Crear Tarea
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                    <path
                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                </svg>
            </a>

        </div>
    </div>

    <div class="row">

        @if (session('mensajeOk'))
        <p class="mt-1 bg-success text-white">{{session('mensajeOk')}}</p>
        @endif


        @if (session('message'))
        <p class="mt-1 bg-success text-white">{{session('message')}}</p>
        @endif

        <div class="col">
            <table class="table table-bordered table-responsive table-hover caption-top">
                <caption>Listado de tareas</caption>
                <thead class="table table-secondary text-center">
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($datos as $dato)
                    <tr class="">
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->titulo}}</td>
                        <td>{{$dato->descripcion}}</td>
                        {{-- <td>
                            <div class="w-25"><img width="50" height="60" class="rounded thumbnail"
                                    src="{{$dato->imagen}}" alt=""></div>
                        </td> --}}
                        <td class="d-block d-md-flex gap-2">
                            <div>
                                <a class="btn btn-info btn-sm mb-2" href="{{route('tarea.show', $dato->id)}}">Ver</a>
                            </div>

                            <div>
                                <form action="{{route('tarea.destroy', $dato->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                            <div>
                                <a class="btn btn-secondary btn-sm"
                                    href="{{route('tarea.edit', $dato->id)}}">Actualizar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</nav>


@endsection()