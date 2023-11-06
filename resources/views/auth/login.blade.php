@extends('layouts.app')

@section('titulo')
    Login
@endsection()

@section('contenido')
    <div class="vh-50 d-block mx-auto">
        <div class="row ">
            <div class="col-12 col-md-6 mb-3">
                <img width="100%" class="rounded" src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" alt="">
            </div>
    
            <div class="col-12 col-md-6 my-auto">
                <form action="{{route('login.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="row d-block d-md-flex justify-content-center align-items-center">
                        @if (session('error'))
                            <p class="bg-danger text-white">{{session('error')}}</p>
                        @endif
                        <div class="col-12">
                            <div class="mb-3 mr-2 input-group">
                                <label for="" class="input-group-text">Correo:</label>
                                <input type="email" name="email" class="form-control form-control-lg">
                                @error('email')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 input-group">
                                <label for="" class="input-group-text">Password:</label>
                                <input type="password" name="password" class="form-control form-control-lg">
                                @error('password')
                                    <p class="bg-danger text-white">{{$message}}</p>
                                @enderror()
                            </div>

                            <div class="mb-3 input-group row d-flex justify-content-start align-items-start gap-2">
                                <div class="col-auto">
                                    <input type="checkbox" name="remember" id="remember">
                                </div>
                               <div class="col-auto">
                                    <label for="" class="form-label mr-3">Mantener sesion activa:</label>
                               </div>
                            </div>

                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-info btn-lg">Iniciar sesion</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()