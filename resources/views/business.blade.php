
@extends('layouts.dashboard-Layout')

@section( 'title' , 'Listado de Negocios')

 @section('content')
  <!-- end page title -->
                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Lista de negocios</h4>
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
                                                                <option value="All">Select Categories</option>
                                                                
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

<!-- Modal -->
<div class="modal fade zoomIn" id="addSeller" tabindex="-1" aria-labelledby="addSellerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Cambié modal-lg por modal-xl para hacerlo más largo -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSellerLabel">Agregar negocio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-content border-0 mt-3">
                <ul class="nav nav-tabs nav-tabs-custom nav-success p-2 pb-0 bg-light" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                            Información general
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#businessDetails" role="tab" aria-selected="false">
                            Características
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#bankDetails" role="tab" aria-selected="false">
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
                        <a class="nav-link" data-bs-toggle="tab" href="#tagDetails" role="tab" aria-selected="false">
                            Etiquetas de búsqueda
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
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
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="countryidInput" class="form-label text-muted">Twitter</label>
                                        <input type="text" class="form-control" id="countryidInput" placeholder="Twitter de tu negocio">
                                        <label for="birthdayidInput" class="form-label text-muted">URL después de https://www.twitter.com/</label>
                                    </div>
                                </div>
                                        
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="businessDetails" role="tabpanel">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="companynameInput" class="form-label">Nombre de la empresa</label>
                                        <input type="text" class="form-control" id="companynameInput" placeholder="Ingresa el nombre de la empresa">
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Agrega más campos según sea necesario -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="bankDetails" role="tabpanel">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="banknameInput" class="form-label">Nombre del banco</label>
                                        <input type="text" class="form-control" id="banknameInput" placeholder="Ingresa el nombre del banco">
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Agrega más campos según sea necesario -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="descriptionDetails" role="tabpanel">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="descriptionInput" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="descriptionInput" rows="5" placeholder="Ingresa una descripción"></textarea>
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Agrega más campos según sea necesario -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="locationDetails" role="tabpanel">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="addressInput" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="addressInput" placeholder="Ingresa la dirección">
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Agrega más campos según sea necesario -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tagDetails" role="tabpanel">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="tagsInput" class="form-label">Etiquetas de búsqueda</label>
                                        <input type="text" class="form-control" id="tagsInput" placeholder="Ingresa etiquetas de búsqueda">
                                    </div>
                                </div>
                                <!--end col-->
                                <!-- Agrega más campos según sea necesario -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal-->


 @endsection()   

