@extends('index')

@section('titulo')
Formulario de registro
@endsection()

@section('contenido')
<div class="mx-auto d-block">
    <div class="card">
        <div class="card-body row">
            <div class="col-12 col-md-6">
                imagen
            </div>
            <div class="col-12 col-md-6">
                @if (session('message'))
                <p class="bg-success text-white p-1">{{session('message')}}</p>
                @endif
                <form action="{{route('register.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="mb-3 input-group">
                        <label for="nombres" class="input-group-text">Nombres: </label>
                        <input value="{{old('nombres')}}" type="text" name="nombres" class="form-control" id="nombres">
                    </div>
                    @error('nombres')
                    <div class="bg-danger  text-white">
                        <p>{{$message}}</p>
                    </div>
                    @enderror

                    <div class="mb-3 input-group">
                        <label for="apellidos" class="input-group-text">Apellidos:</label>
                        <input value="{{old('apellidos')}}" type="text" name="apellidos" class="form-control"
                            id="apellidos">
                    </div>
                    @error('apellidos')
                    <div class="bg-danger  text-white">
                        <p>{{$message}}</p>
                    </div>
                    @enderror

                    <div class="mb-3 row">
                        <div class="col">
                            <div class="input-group">
                                <label for="email" class="input-group-text">Email:</label>
                                <input type="email" value="{{old('email')}}" name="email" class="form-control"
                                    id="email">
                            </div>
                            @error('email')
                            <div class="bg-danger  text-white">
                                <p>{{$message}}</p>
                            </div>
                            @enderror
                        </div>

                        <div class="col">
                            <div class="input-group">
                                <label for="edad" class="input-group-text">Edad:</label>
                                <input value="{{old('edad')}}" type="number" name="age" class="form-control" id="edad">
                            </div>
                            @error('age')
                            <div class="bg-danger  text-white">
                                <p>{{$message}}</p>
                            </div>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <h6>Selecciona tu sexo</h6>
                        <div class="col">
                            <div class="mb-3 form-check">

                                <label for="" class="form-check-label">Hombre</label>
                                <input value="h" type="checkbox" class="form-check-input" name="sexo" id="">
                            </div>
                        </div>

                        <div class="col">
                            <div class="mb-3 form-check">
                                <label for="" class="form-check-label">Mujer</label>
                                <input value="m" type="checkbox" class="form-check-input" name="sexo" id="">
                            </div>
                        </div>

                        @error('sexo')
                            <p class="bg-danger text white">
                                {{$message}}
                            </p>
                        @enderror
                    </div>


                    <div class="mb-3 input-group">
                        <label for="password" class="input-group-text">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>




                    <div class="mb-3 input-group">
                        <label for="password_confirmation" class="input-group-text">Confirmar password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation">
                    </div>
                    @error('password')
                    <div class="bg-danger  text-white">
                        <p>{{$message}}</p>
                    </div>
                    @enderror

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection()