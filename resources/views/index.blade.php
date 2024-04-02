
@extends('layouts.plantilla')

@section( 'title' , 'Home')


 @section('content')
 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about-greenhouse.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre nosotros</h6>
                    <h1 class="mb-3">La mejor administración </h1>
                    <p class="text-justify">Nuestro administrador de Invernaderos permite monitorear y controlar todos los aspectos
                        de la producción en entornos controlados. Desde la temperatura y la humedad hasta la iluminación 
                        y la irrigación, nuestro sistema proporciona a los agricultores un control preciso sobre las condiciones 
                        ambientales dentro del invernadero,
                        permitiéndoles crear un ambiente óptimo para el crecimiento de sus cultivos.</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-greenhouse-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-greenhouse-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="{{ route('services') }}" class="btn btn-primary mt-1">Leer más.</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
 
 <!-- Manager Start -->
 

<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
            <h1>Administración & Monitoreo</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x mx-auto mb-4">
                        <svg  width="40" height="40" fill="currentColor" class="bi bi-display-fill" viewBox="0 0 16 16">
                            <path d="M6 12q0 1-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75Q10 13 10 12h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2z"/>
                        </svg>
                    </i>
                    <h5 class="mb-2">Monitoreo Remoto</h5>
                    <p class="m-0">Puedes monitorear remotamente las condiciones ambientales de tu vivero casero en tiempo real.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x mx-auto mb-4">
                        <svg width="40" height="40" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                            <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1z"/>
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        </svg>
                    </i>
                    <h5 class="mb-2">Alertas y Notificaciones</h5>
                    <p class="m-0">Recibirás alertas y notificaciones cuando se detectan condiciones fuera de los rangos predefinidos.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x  mx-auto mb-4">
                        <svg  width="40" height="40" fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5zM3 12v-2h2v2zm0 1h2v2H4a1 1 0 0 1-1-1zm3 2v-2h3v2zm4 0v-2h3v1a1 1 0 0 1-1 1zm3-3h-3v-2h3zm-7 0v-2h3v2z"/>
                        </svg>
                    </i>
                    <h5 class="mb-2">Análisis de Datos</h5>
                    <p class="m-0">Puedes acceder a análisis detallados de los datos recopilados de tu invernadero, como la temperatura, humedad y PH.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class=" d-flex flex-column align-items-center justify-content-center">
        <div>
            <a href="{{ route('services') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Leer más.</a>
        </div>
    </div>
   
</div>
<!-- Service End -->

 @endsection()   

