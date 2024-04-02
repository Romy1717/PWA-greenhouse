
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

<!-- Feature Start -->
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <svg  width="40" height="40" fill="currentColor" class="bi bi-laptop text-white" viewBox="0 0 15 20" >
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                          </svg>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="">Flexibilidad</h5>
                        <p class="m-0 text-justify">Te da la posibilidad de administrar tu invernadero desde cualquier dispositivo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fa fa-2x fa-award text-white"></i>
                    </div>
                    <div class="d-flex flex-column text-justify ">
                        <h5 class="">Mejor Servicio</h5>
                        <p class="m-0">Proporciona estadísticas y datos de tu invernadero en tiempo real.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex mb-4 mb-lg-0">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <svg  width="60" height="60" fill="currentColor" class="bi bi-wifi-1 text-white" viewBox="0 0 15 20">
                            <path d="M11.046 10.454c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.708-.707z"/>
                          </svg>
                    </div>
                    <div class="d-flex flex-column text-justify ">
                        <h5 class="">Funcionamiento offline</h5>
                        <p class="m-0">Perminte una getión continua incluso en áreas con conexiones de internet intermitentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
     
  
 
 @endsection()   

