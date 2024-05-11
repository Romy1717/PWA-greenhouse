@extends('layouts.dashboard-Layout')

@section('title', 'Sensores')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Categorías de sensores</h4>
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
                                    <th scope="col" style="width: 50px;">   
                                    </th>
                                    <th scope="col" style="width: 50px;">Id</th>
                                    <th class="sort" data-sort="type">Tipo</th>
                                    <th class="sort" data-sort="description">Descripción</th>
                                    <th class="sort" data-sort="created_at">Fecha de creación</th>
                                    <th class="sort" data-sort="updated_at">Fecha de modificación</th>
                                    <th class="sort" data-sort="action">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sensores as $sensor)
                                <tr>
                                    <td></td>
                                    <td>{{ $sensor->id }}</td>
                                    <td>{{ $sensor->type }}</td>
                                    
                                    <td style="max-width: 300px; overflow-wrap: break-word; text-align: justify;">
                                        <?php
                                        $description = $sensor->description;
                                        $paragraphs = explode("\n", wordwrap($description, 32));
                                        foreach ($paragraphs as $paragraph) {
                                            echo "<p>$paragraph</p>";
                                        }
                                        ?>
                                    </td>
                                    <td>{{ $sensor->created_at }}</td>
                                    <td>{{ $sensor->updated_at }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal{{ $sensor->id }}">Editar</button>
                                            </div>
                                            <div class="remove">
                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $sensor->id }}">Eliminar</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($sensores->isEmpty())
                        <div class="noresult">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">¡Lo siento! No se encontraron resultados</h5>
                            </div>
                        </div>
                        @endif
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
                <h5 class="modal-title" id="exampleModalLabel">Agregar sensor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('sensors.store') }}">

                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <input type="text" id="tipo" name="type" class="form-control" placeholder="Ingresa un tipo" required />
                        <div class="invalid-feedback">Por favor agrega un tipo para el sensor.</div>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea id="descripcion" name="description" class="form-control" placeholder="Ingresa una descripción"></textarea>
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
@foreach($sensores as $sensor)
<div class="modal fade" id="editModal{{ $sensor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Modificar sensor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('sensors.update', $sensor->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="Ingresa un tipo" value="{{ $sensor->type }}" required />
                        <div class="invalid-feedback">Por favor agrega un tipo para el sensor.</div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $sensor->description }}</textarea>
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
<div class="modal fade zoomIn" id="deleteRecordModal{{ $sensor->id }}" tabindex="-1" aria-hidden="true">
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
                        <p class="text-muted mx-4 mb-0">¿Estás seguro de borrar este sensor?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <form id="delete-sensor-form" action="{{ route('sensors.destroy', $sensor->id) }}" method="POST">
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


@endsection
