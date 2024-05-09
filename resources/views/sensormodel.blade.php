@extends('layouts.dashboard-Layout')

@section('title', 'Modelos')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Modelos de sensores</h4>
            </div>
            <div class="card-body">
                <div class="listjs-table" id="customerList">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-card mt-3 mb-1">
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <!-- Table header -->
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;"></th>
                                    <th class=" text-center" data-sort="id">Id</th>
                                    <th class=" text-center" data-sort="sensor_id">Tipo</th>
                                    <th class=" text-center" data-sort="model">Modelo</th>
                                    <th class=" text-center" data-sort="brand">Marca</th>
                                    <th class=" text-center" data-sort="maker">Fabricante</th>
                                    <th class=" text-center" data-sort="description">Descripción</th>
                                    <th class=" text-center" data-sort="measurement_units">Unidades de medida</th>
                                    <th class=" text-center" data-sort="created_at">Fecha de creación</th>
                                    <th class=" text-center" data-sort="updated_at">Fecha de modificación</th>
                                    <th class=" text-center" data-sort="action">Acción</th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                                @foreach($modelos as $modelo)
                                <tr>
                                    <td></td>
                                    <td>{{ $modelo->id }}</td>
                                    <td>{{ $modelo->sensor->type }}</td>
                                    <td>{{ $modelo->model }}</td>
                                    <td>{{ $modelo->brand }}</td>
                                    <td>{{ $modelo->maker }}</td>
                                    <td style="max-width: 300px; overflow-wrap: break-word; text-align: justify;">
                                        <?php
                                        $description = $modelo->description;
                                        $paragraphs = explode("\n", wordwrap($description, 32));
                                        foreach ($paragraphs as $paragraph) {
                                            echo "<p>$paragraph</p>";
                                        }
                                        ?>
                                    </td>
                                    <td>{{ $modelo->measurement_units }}</td>
                                    <td>{{ $modelo->created_at }}</td>
                                    <td>{{ $modelo->updated_at }}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#editModal{{ $modelo->id }}">Editar</button>
                                            </div>
                                            <div class="remove">
                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal{{ $modelo->id }}">Eliminar</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- No results message -->
                        @if($modelos->isEmpty())
                        <div class="noresult">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">¡Lo siento! No se encontraron resultados</h5>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- agregar Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Agregar modelo de sensor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form action="{{ route('sensormodel.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sensor_id" class="form-label">Sensor</label>
                        <select name="sensor_id" id="sensor_id" class="form-control" required>
                            <option value="" selected disabled>Selecciona un tipo de sensor</option>
                            @foreach($sensores as $sensor)
                                <option value="{{ $sensor->id }}">{{ $sensor->type }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marca</label>
                        <input type="text" id="brand" name="brand" class="form-control" placeholder="Ingresa la marca" required />
                    </div>
                    
                    <div class="mb-3">
                        <label for="model" class="form-label">Modelo</label>
                        <input type="text" id="model" name="model" class="form-control" placeholder="Ingresa un modelo" required />
                    </div>
                    <div class="mb-3">
                        <label for="maker" class="form-label">Fabricante</label>
                        <input type="text" id="maker" name="maker" class="form-control" placeholder="Ingresa el fabricante" required />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="measurement_units" class="form-label">Unidades de medida</label>
                        <input type="text" id="measurement_units" name="measurement_units" class="form-control" placeholder="Ingresa las unidades de medida" required />
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
<!-- Modificar Modal -->
@foreach($modelos as $modelo)
<div class="modal fade" id="editModal{{ $modelo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">Modificar modelo de sensor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('sensormodel.update', $modelo->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sensor_id" class="form-label">Sensor</label>
                        <select name="sensor_id" id="sensor_id" class="form-control" required>
                            <option value="{{ $modelo->sensor->id }}">{{ $modelo->sensor->type }}</option>
                            @foreach($sensores as $sensor)
                                <option value="{{ $sensor->id }}">{{ $sensor->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="brand" class="form-label">Marca</label>
                        <input type="text" id="brand" name="brand" class="form-control" placeholder="Ingresa la marca" value="{{ $modelo->brand }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Modelo</label>
                        <input type="text" id="model" name="model" class="form-control" placeholder="Ingresa un modelo" value="{{ $modelo->model }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="maker" class="form-label">Fabricante</label>
                        <input type="text" id="maker" name="maker" class="form-control" placeholder="Ingresa el fabricante" value="{{ $modelo->maker }}" required />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{ $modelo->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="measurement_units" class="form-label">Unidades de medida</label>
                        <input type="text" id="measurement_units" name="measurement_units" class="form-control" placeholder="Ingresa las unidades de medida" value="{{ $modelo->measurement_units }}" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" id="update-btn">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


<!-- Eliminar Modal -->
@foreach($modelos as $modelo)
<div class="modal fade zoomIn" id="deleteRecordModal{{ $modelo->id }}" tabindex="-1" aria-hidden="true">
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
                        <p class="text-muted mx-4 mb-0">¿Estás seguro de borrar este modelo de sensor?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Cerrar</button>
                    <form id="delete-modelo-form{{ $modelo->id }}" action="{{ route('sensormodel.destroy', $modelo->id) }}" method="POST">
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
