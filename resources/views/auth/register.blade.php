@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<section class="vh-100 bg-image mb-5 ">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100 mb-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">

                            <h5 class="text-uppercase text-center">Crea una cuenta</h5>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="name">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="lastname_1">Apellido Paterno</label>
                                    <input type="text" id="lastname_1" name="lastname_1" class="form-control" placeholder="Ingresa tu apellido paterno" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="lastname_2">Apellido Materno</label>
                                    <input type="text" id="lastname_2" name="lastname_2" class="form-control" placeholder="Ingresa tu apellido materno" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="email">Correo electrónico</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="nombre@ejemplo.com" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="password">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="password_confirmation">Confirma contraseña</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="birthday">Fecha de Nacimiento</label>
                                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="Fecha de Nacimiento" required />
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label" for="gender">Género</label>
                                    <select id="gender" name="gender" class="form-control" required>
                                        <option value="" disabled selected>Selecciona tu género</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="femenino">Femenino</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                               
                                
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 ligth-text">Registrar</button>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center">
                                            <p class="text-muted" style="color: #184e77;">¿Ya tienes una cuenta? <a href="{{ route('login') }}" style="color: #1e6091;">Inicia sesión aquí</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection
