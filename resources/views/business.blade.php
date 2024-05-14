
@extends('layouts.dashboard-Layout')

@section( 'title' , 'Listado de Negocios')

 @section('content')
  <!-- end page title -->
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Lista de invernaderos</h4>
                                </div><!-- end card header -->
                    
                                <div class="card-body">
                                    <div class="listjs-table" id="customerList">
                                        <div class="card">
                                            <div class="card-header border-0 rounded">
                                                <div class="row g-2">
                                                    <div class="col-xl-3">
                                                        <div class="search-box">
                                                            <input type="text" class="form-control" autocomplete="off" id="searchResultList" placeholder="Buscar"> <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-3 ms-auto">
                                                        <div>
                                                            <select class="form-control" id="category-select" >
                                                                <option value="All">Selecciona una categoria</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-auto">
                                                        <div class="hstack gap-2">
                                                            <button type="button" class="btn btn-danger"><i class="ri-equalizer-fill me-1 align-bottom"></i>Filtrar</button>
                                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSeller"><i class="ri-add-fill me-1 align-bottom"></i> Agregar</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                    
                                        <div class="table-responsive table-card mt-3 mb-1">
                                            <table class="table align-middle table-nowrap" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;"></th>
                                                        <th class="sort" data-sort="id">Id</th>
                                                        <th class="sort" data-sort="name">Nombre</th>
                                                        <th class="sort" data-sort="description">Descripción</th>
                                                        <th class="sort" data-sort="subcategories_count">Subcategorías</th>
                                                        <th class="sort" data-sort="datecreate">Fecha de creación</th>
                                                        <th class="sort" data-sort="dame modifi">Fecha de modificación</th>
                                                        <th class="sort" data-sort="action">Acción</th>
                                                    </tr>
                                                </thead>
                                             
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">¡Lo siento! No se encontraron resultados</h5>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="javascript:void(0);">Anterior</a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="javascript:void(0);">Siguiente</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="modal fade zoomIn" id="addSeller" tabindex="-1" aria-labelledby="addSellerLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Cambié modal-lg por modal-xl para hacerlo más largo -->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addSellerLabel">Agregar invernadero</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-content border-0 mt-3">
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success p-2 pb-0 bg-light" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#Generalinformation" role="tab" aria-selected="true">
                                                Información general
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#schedule" role="tab" aria-selected="false">
                                                Horarios
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#descriptionDetails" role="tab" aria-selected="false">
                                                Descripción
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#locationDetails" role="tab" aria-selected="false">
                                                Dirección y ubicación en el mapa
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#labelDetails" role="tab" aria-selected="false">
                                                Etiquetas de búsqueda
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-body">
                                    <div class="tab-content">
                                        <!-- informacion general -->
                                        <div class="tab-pane active" id="Generalinformation" role="tabpanel">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Nombre:</label>
                                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Nombre del necogio">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Descripción corta:</label>
                                                            <input type="text" class="form-control" id="firstnameInput" placeholder="Describe tu negocio en pocas palabras o escribe tu slogan">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="mb-3">
                                                                <label for="choices-single-no-sorting" class="form-label">Categoria:</label>
                                                                <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                                                                    <option value="Madrid">Madrid</option>
                                                                    <option value="Toronto">Toronto</option>
                                                                    <option value="Vancouver">Vancouver</option>
                                                                    <option value="London">London</option>
                                                                    <option value="Manchester">Manchester</option>
                                                                    <option value="Liverpool">Liverpool</option>
                                                                    <option value="Paris">Paris</option>
                                                                    <option value="Malaga">Malaga</option>
                                                                    <option value="Washington" disabled>Washington</option>
                                                                    <option value="Lyon">Lyon</option>
                                                                    <option value="Marseille">Marseille</option>
                                                                    <option value="Hamburg">Hamburg</option>
                                                                    <option value="Munich">Munich</option>
                                                                    <option value="Barcelona">Barcelona</option>
                                                                    <option value="Berlin">Berlin</option>
                                                                    <option value="Montreal">Montreal</option>
                                                                    <option value="New York">New York</option>
                                                                    <option value="Michigan">Michigan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                   
                                                    <!--end col-->
                                                    
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="choices-single-no-sorting" class="form-label">Subcategoria:</label>
                                                            <select class="form-control" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices data-choices-sorting-false>
                                                                <option value="Madrid">Madrid</option>
                                                                <option value="Toronto">Toronto</option>
                                                                <option value="Vancouver">Vancouver</option>
                                                                <option value="London">London</option>
                                                                <option value="Manchester">Manchester</option>
                                                                <option value="Liverpool">Liverpool</option>
                                                                <option value="Paris">Paris</option>
                                                                <option value="Malaga">Malaga</option>
                                                                <option value="Washington" disabled>Washington</option>
                                                                <option value="Lyon">Lyon</option>
                                                                <option value="Marseille">Marseille</option>
                                                                <option value="Hamburg">Hamburg</option>
                                                                <option value="Munich">Munich</option>
                                                                <option value="Barcelona">Barcelona</option>
                                                                <option value="Berlin">Berlin</option>
                                                                <option value="Montreal">Montreal</option>
                                                                <option value="New York">New York</option>
                                                                <option value="Michigan">Michigan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailidInput" class="form-label">Correo:</label>
                                                            <input type="email" class="form-control" id="emailidInput" placeholder="hola@negocios.com">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Teléfono:</label>
                                                            <input type="number" class="form-control" id="phonenumberInput" placeholder="Número de atención al cliente">
                                                        </div>
                                                    </div>
                                                     <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">WhatsApp:</label>
                                                            <input type="number" class="form-control" id="phonenumberInput" placeholder="Número WhatsApp">
                                                        </div>
                                                    </div>
                                                     <!--end col-->
                                                     <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Sitio web:</label>
                                                            <input type="number" class="form-control" id="phonenumberInput" placeholder="www.minegocio.com">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="birthdayidInput" class="form-label">Facebook:</label>
                                                            <input type="text" id="birthdayidInput" class="form-control" data-provider="flatpickr" placeholder="Facebook de tu negocio">
                                                            <label for="birthdayidInput" class="form-label text-muted">URL después de https://www.facebook.com/ </label>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="cityidInput" class="form-label">Instagram:</label>
                                                            <input type="text" class="form-control" id="cityidInput" placeholder="Instagram de tu negocio">
                                                            <label for="birthdayidInput" class="form-label text-muted">URL después de https://www.instagram.com/ </label>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="countryidInput" class="form-label text-muted">Twitter</label>
                                                            <input type="text" class="form-control" id="countryidInput" placeholder="Twitter de tu negocio">
                                                            <label for="birthdayidInput" class="form-label text-muted">URL después de https://www.twitter.com/</label>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="row">
                                                        <label for="countryidInput" class="form-label">Características</label>
                                                        <div class="col-lg-12 mt-3">
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                                <label class="form-check-label" for="gridCheck1">
                                                                   Wi-Fi.
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                                                <label class="form-check-label" for="gridCheck2">
                                                                   Estacionamiento.
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                                <label class="form-check-label" for="gridCheck3">
                                                                   Área de fumadores.
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck4">
                                                                <label class="form-check-label" for="gridCheck4">
                                                                  Acepta tarjeta.
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck5">
                                                                <label class="form-check-label" for="gridCheck5">
                                                                  Elevador.
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline mb-3">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck5">
                                                                <label class="form-check-label" for="gridCheck5">
                                                                  Envió a domicilio 
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                            
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end  informacion general  -->
                                        <!-- horario -->
                                        <div class="tab-pane fade" id="schedule" role="tabpanel">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">Día</th>
                                                                        <th class="text-center">Hora de pertura</th>
                                                                        <th class="text-center">Hora de Cierre</th>
                                                                        <th class="text-center">¿Cerrado?</th>
                                                                        <th class="text-center">¿Abierto 24h?</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Lunes</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="lunes" id="flexRadioDefault1">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="lunes" id="flexRadioDefault2">
                                                                            </div>
                                                                        </td> 
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <td>Martes</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="martes" id="flexRadioDefault3">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="martes" id="flexRadioDefault4">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Miércoles</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="miercoles" id="flexRadioDefault5">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="miercoles" id="flexRadioDefault6">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jueves</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="jueves" id="flexRadioDefault7">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="jueves" id="flexRadioDefault8">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Viernes</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="viernes" id="flexRadioDefault9">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="viernes" id="flexRadioDefault10" >
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Sábado</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="sabado" id="flexRadioDefault11">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="sabado" id="flexRadioDefault12" >
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Domingo</td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td><input type="time" class="form-control"></td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="domingo" id="flexRadioDefault1">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check mx-auto text-center">
                                                                                <input class="form-check-input" type="radio" name="domingo" id="flexRadioDefault2">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--end horario-->
                                        <!-- descripción general -->
                                        <div class="tab-pane fade" id="descriptionDetails" role="tabpanel">
                                            <form action="#">
                                                <div>
                                                    <label class="form-label" for="gen-info-description-input">Descripción:</label>
                                                    <textarea class="form-control" style="height: 400px;" placeholder="Agrega una descripción de tu negocio" id="gen-info-description-input" rows="4" required></textarea>
                                                    <div class="invalid-feedback">Agrega una descripción de tu negocio</div>
                                                </div>
                                            </form>
                                        </div>
                                         <!-- end  descripción general  -->
                                         <!-- dirección general -->
                                         <div class="tab-pane fade" id="locationDetails" role="tabpanel">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Código postal:</label>
                                                            <input type="text" class="form-control" id="firstnameInput">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Localidad:</label>
                                                            <input type="text" class="form-control" id="firstnameInput">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Municipio:</label>
                                                            <input type="text" class="form-control" id="firstnameInput">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Estado:</label>
                                                            <input type="text" class="form-control" id="firstnameInput">
                                                        </div>
                                                    </div>                 
                                                    <div class="col-lg-14">
                                                        <div class="mb-3">
                                                            <label for="emailidInput" class="form-label">Colonia:</label>
                                                            <input type="email" class="form-control" id="emailidInput" placeholder="Introduce el nombre de la colonia">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-14">
                                                        <div class="mb-3">
                                                            <label for="emailidInput" class="form-label">Calle:</label>
                                                            <input type="email" class="form-control" id="emailidInput" placeholder="Introduce el nombre de la calle">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Número exterior:</label>
                                                            <input type="number" class="form-control" id="phonenumberInput">
                                                        </div>
                                                    </div>
                                                     <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Número interior:</label>
                                                            <input type="number" class="form-control" id="phonenumberInput" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="latitudeInput" class="form-label">Latitud:</label>
                                                            <input type="text" class="form-control" id="latitudeInput" placeholder="Latitud" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="longitudeInput" class="form-label">Longitud:</label>
                                                            <input type="text" class="form-control" id="longitudeInput" placeholder="Longitud" readonly>
                                                        </div>
                                                    </div>
                                                    <label for="longitudeInput" class="form-label text-muted "> Para buscar la dirección que capturaste en el mapa
                                                        o posibles sugerencias, haz clic en el boton <strong>"Buscar dirección en el mapa"</strong>, los resultaod son sugerencias,
                                                        no siempre se genera la ubicación exacta, revisa con atención el mapa antes de guardar.
                                                    </label>
                                                   
                                                    
                                                </div>
                                            </form>
                                        </div> 
                                        <!-- end  dirección general  -->
                                        <!-- etiquetas general -->
                                        <div class="tab-pane" id="labelDetails" role="tabpanel">
                                            <form action="#">
                                                <div class="mb-14">
                                                    <label for="emailidInput" class="form-label">
                                                        Agregar etiqueta de búsqueda 
                                                      
                                                    </label>                               
                                                </div>
                                                <div class="mb-14">                                                
                                                    <label for="emailidInput" class="form-label text-muted ">
                                                        La etiqueta ayuda a que los usuarios encuentren tu negocio.
                                                    </label>
                                                </div>
                                                <div class="col-lg-14">
                                                    <div class="mb-3">
                                                        <label for="emailidInput" class="form-label">Etiqueta:</label>
                                                        <input type="email" class="form-control" id="emailidInput" placeholder="Introduce la etiqueta de búsqueda">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button class="btn btn-link link-success text-decoration-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Cerrar</button>
                                                        <button type="submit" class="btn btn-primary"><i class="ri-save-3-line align-bottom me-1"></i> Guardar</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </form>
                                        </div>
                                        
                                        <!-- end  etiquetas general  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            

                    
 @endsection()   

