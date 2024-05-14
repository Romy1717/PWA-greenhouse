@extends('layouts.dashboard-Layout')

@section( 'title' , 'Banners')

 @section('content')
 
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Lista de banners</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="listjs-table" id="customerList">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Agregar</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1">
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;"></th>
                                    <th class="sort" data-sort="id">Id</th>
                                    <th class="sort" data-sort="title">Titulo</th>
                                    <th class="sort" data-sort="description">Descripción</th>
                                    <th class="sort" data-sort="img">Imagen</th>
                                    <th class="sort" data-sort="url">URL</th>
                                    <th class="sort" data-sort="datecreate">Fecha de creación</th>
                                    <th class="sort" data-sort="datemodify">Fecha de modificación</th>
                                    <th class="sort" data-sort="action">Acción</th>
                                </tr>
                            </thead>
                            <tbody>    
                            </tbody>
                        </table>
                       
                        <div class="noresult">
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


<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Agregar subcategoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="" method="POST"> <!-- Cambiado a 'subcategoriesbusiness.store' -->
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="business_category_id" class="form-label">Categoría</label>
                        <select name="business_category_id" id="business_category_id" class="form-control" required>
                            <option value="" selected disabled>Selecciona una categoría</option>
                          
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa un nombre" required />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" id="add-btn">Agregar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
 @endsection()   

