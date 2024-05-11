@extends('layouts.dashboard-Layout')

@section('title', 'Categorias de negocio')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Lista de categorías para los negocios</h4>
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
                                    <th class="sort" data-sort="name">Nombre</th>
                                    <th class="sort" data-sort="description">Descripción</th>
                                    <th class="sort" data-sort="subategory">Subcategoria</th>
                                    <th class="sort" data-sort="datecreate">Fecha de creación</th>
                                    <th class="sort" data-sort="dame modifi">Fecha de modificación</th>
                                    <th class="sort" data-sort="action">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($businesscategories as $businessCategory)
                                <tr>
                                    <td></td>
                                    <td>{{ $businessCategory->id }}</td>
                                    <td>{{ $businessCategory->name }}</td>
                                    <td>{{ $businessCategory->description }}</td>
                                    <td></td>
                                    <td>{{ $businessCategory->created_at }}</td>
                                    <td>{{ $businessCategory->updated_at }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal{{ $businessCategory->id }}">Editar</button>
                                            </div>
                                            <div class="remove">
                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $businessCategory->id }}">Eliminar</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($businesscategories->isEmpty())
                        <div class="noresult">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">¡Lo siento! No se encontraron resultados</h5>
                            </div>
                        </div>
                        @endif
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

<!-- Agregar Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Agregar categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('businesscategories.store') }}"> <!-- Cambiado a 'businesscategories.store' -->
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
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa un nombre" required />
                        <div class="invalid-feedback">Por favor agrega un nombre para la categoría.</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <div class="invalid-feedback">Por favor agrega una descripción.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Agregar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modificar y Eliminar Modal-->
@foreach($businesscategories as $businessCategory)
<div class="modal fade" id="editModal{{ $businessCategory->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Modificar categoría</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('businesscategories.update', $businessCategory->id) }}"> <!-- Cambiado a 'businesscategories.update' -->
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa un nombre" value="{{ $businessCategory->name }}" required />
                        <div class="invalid-feedback">Por favor agrega un nombre para la categoría.</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $businessCategory->description }}</textarea>
                        <div class="invalid-feedback">Por favor agrega una descripción.</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success" id="update-btn">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Eliminar Modal -->
<div class="modal fade zoomIn" id="deleteRecordModal{{ $businessCategory->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>¿Estás seguro?</h4>
                        <p class="text-muted mx-4 mb-0">¿Estás seguro de borrar esta categoría?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <form id="delete-businesscategory-form" action="{{ route('businesscategories.destroy', $businessCategory->id) }}" method="POST"> <!-- Cambiado a 'businesscategories.destroy' -->
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn w-sm btn-danger" id="delete-record">¡Sí, bórralo!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!--end modal -->

<!--end row-->

@endsection
