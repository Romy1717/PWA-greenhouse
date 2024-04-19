@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-4">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block align-items-center justify-content-center">
                            <img src="img/login-img.jpg" alt="login form" class="img-fluid h-100"
                                style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="POST" action="{{ route('login') }}">
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
                                    <div class="d-flex align-items-center  mb-4 pb-1 align-items-center justify-content-center ">
                                        <h1 class="m-0 text-dark"><span class=" text-primary ">GREEN</span>HOUSE</h1>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3 " style="letter-spacing: 1px;">Iniciar
                                        sesión</h5>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email"
                                            class="form-control form-control-lg" placeholder="nombre@ejemplo.com" />
                                        <label class="form-label" for="email">Correo electrónico</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg" placeholder="Ingresa tu contraseña" />
                                        <label class="form-label" for="password">Contraseña</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block">Iniciar
                                            sesión</button>
                                    </div>

                                    <a class="small text-muted" href="{{ route('password.request') }}">¿Has
                                        olvidado tu contraseña?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #184e77;">¿No tienes una cuenta? <a
                                            href="{{ route('register') }}" style="color: #184e77;">Registrar
                                            aquí</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
