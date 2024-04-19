@extends('layouts.dashboard-Layout')

@section( 'title' , 'Usuarios')

 @section('content')
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Listado de Usuarios</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="listjs-table" id="customerList">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control search" placeholder="Search...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1">
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="name" >Nombre</th>
                                    <th class="sort" data-sort="lastname_1" >Apellido Paterno</th>
                                    <th class="sort" data-sort="lastname_2" >Apellido Materno</th>
                                    <th class="sort" data-sort="email">Correo</th>
                                    <th class="sort" data-sort="category">Categoría</th>
                                    <th class="sort" data-sort="date">Fecha de registro</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $usuarios as $us )
                                    <td><div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                    </div></td>
                                    <td class="name">{{$us -> name }}</td>
                                    <td class="lastname_1">{{$us -> lastname_1 }}</td>
                                    <td class="lastname_2">{{$us -> lastname_2 }}</td>
                                    <td class="email">{{$us -> email}}</td>
                                    <td class="category">{{$us -> category}}</td>
                                    <td class="date">{{$us -> created_at}}</td>
                                    <!--<td><div class="d-flex gap-2">
                                        <div class="edit">
                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Editar</button>
                                        </div>
                                        <div class="remove">
                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Eliminar</button>
                                        </div>
                                        <div class="info">
                                            <button class="btn btn-sm btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#ShowModal">Info.</button>
                                        </div>
                                    </div></td> 
                                -->
                                @endforeach
                            </tbody>   
                            
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="javascript:void(0);">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
</div>


 @endsection()   

