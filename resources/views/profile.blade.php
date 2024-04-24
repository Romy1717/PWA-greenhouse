@extends('layouts.dashboard-Layout')

@section( 'title' , 'Perfil')

 @section('content')
 <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
            </div>

            <div class="d-flex align-items-center">

                <div class="d-flex align-items-center">

                    <div class="dropdown d-md-none topbar-head-dropdown header-item">
                       
                    </div>
                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-category-alt fs-22'></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fw-semibold fs-15"> Opciones </h6>
                                    </div>
                                </div>
                            </div>
        
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="{{ route('about') }}">
                                            <svg width="30" height="30" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                                              </svg>
                                            <span>Acerca de</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="{{ route('services') }}">
                                            <svg  width="30" height="30" fill="currentColor" class="bi bi-union" viewBox="0 0 16 16">
                                                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2z"/>
                                              </svg>
                                            <span>Servicios</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="{{ route('contact') }}">
                                            <svg  width="30" height="30" fill="currentColor" class="bi bi-envelope-check-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z"/>
                                                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
                                              </svg>
                                            <span>Contacto</span>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                   
                                </div>
                            </div>

                           

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                               
                                            </div>                               
                                        </div>
                                    </div>

                                    


                                </div>

                            </div>

                       
                        
                        </div>
                    </div>
                </div>

               
        <div class="dropdown ms-sm-3 header-item topbar-user">
            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="text-start  ms-xl-2 mt-3">
                        <h3 class="h4">{{ $user->name }}</h3> 
                        <p class="text-opacity-75">{{ $user->category }}</p>
                    </span>
                    
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <h6 class="dropdown-header">¡Bienvenida, Anna!</h6>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Perfil</span></a>
                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Mensajes</span></a>
                <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Panel de Tareas</span></a>
                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Ayuda</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Saldo : <b>$5971.67</b></span></a>
                <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">Nuevo</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Configuración</span></a>
                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Bloquear pantalla</span></a>
                @auth
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Cerrar sesión</span></a>
                @endauth
            </div>
            
        </div>
            </div>
        </div>
    </div>
</header>
<div class="profile-foreground position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg">
        <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
    </div>
</div>
<div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
    <div class="row g-4">
        <div class="col-auto">
            <div class="avatar-lg">
                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle" />
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="p-2">
                <h3 class="text-white mb-1">{{ $user->name }} {{ $lastname }}</h3>
                <p class="text-white text-opacity-75">{{ $user->category }}</p>
                <div class="hstack text-white-50 gap-1">
                    <div class="me-2">
                        <i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>
                        
                    </div>
                    <div>
                        <i class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--end row-->
</div>
<div class="row">
    <div class="col-lg-12">
        <div>
         
            <!-- Tab panes -->
            <div class="tab-content pt-4 text-muted">
                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-5">Completa tu información</h5>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-danger @if($porcentajeCompletado > 0) filled @endif" role="progressbar" style="width: {{ $porcentajeCompletado }}%" aria-valuenow="{{ $porcentajeCompletado }}" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">{{ $porcentajeCompletado }}%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Información</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-0" scope="row">Nombre:</th>
                                                    <td class="text-muted">{{ $user->name }} {{ $lastname }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Correo :</th>
                                                    <td class="text-muted">{{ $user->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Fecha de registro:</th>
                                                    <td class="text-muted">{{ $user->created_at->format('d/m/Y') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                            
                        </div>
                
                    </div>
                    <!--end row-->
                </div>
                <div class="tab-pane fade" id="activities" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Activities</h5>
                            <div class="acitivity-timeline">
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Oliver Phillips <span class="badge bg-primary-subtle text-primary align-middle">New</span></h6>
                                        <p class="text-muted mb-2">We talked about a project on linkedin.</p>
                                        <small class="mb-0 text-muted">Today</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                        <div class="avatar-title bg-success-subtle text-success rounded-circle">
                                            N
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Nancy Martino <span class="badge bg-secondary-subtle text-secondary align-middle">In Progress</span></h6>
                                        <p class="text-muted mb-2"><i class="ri-file-text-line align-middle ms-2"></i> Create new project Buildng product</p>
                                        <div class="avatar-group mb-2">
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Christi">
                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Frank Hook">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xs" />
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" Ruby">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                        R
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="more">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title rounded-circle">
                                                        2+
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <small class="mb-0 text-muted">Yesterday</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Natasha Carey <span class="badge bg-success-subtle text-success align-middle">Completed</span>
                                        </h6>
                                        <p class="text-muted mb-2">Adding a new event with attachments</p>
                                        <div class="row">
                                            <div class="col-xxl-4">
                                                <div class="row border border-dashed gx-2 p-2 mb-2">
                                                    <div class="col-4">
                                                        <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-4">
                                                        <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid rounded" />
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <small class="mb-0 text-muted">25 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Bethany Johnson</h6>
                                        <p class="text-muted mb-2">added a new member to velzon dashboard</p>
                                        <small class="mb-0 text-muted">19 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                                <i class="ri-shopping-bag-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Your order is placed <span class="badge bg-danger-subtle text-danger align-middle ms-1">Out of Delivery</span></h6>
                                        <p class="text-muted mb-2">These customers can rest assured their order has been placed.</p>
                                        <small class="mb-0 text-muted">16 Nov</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Lewis Pratt</h6>
                                        <p class="text-muted mb-2">They all have something to say
                                            beyond the words on the page. They can come across as
                                            casual or neutral, exotic or graphic. </p>
                                        <small class="mb-0 text-muted">22 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item py-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs acitivity-avatar">
                                            <div class="avatar-title rounded-circle bg-info-subtle text-info">
                                                <i class="ri-line-chart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Monthly sales report</h6>
                                        <p class="text-muted mb-2">
                                              <span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a>
                                        </p>
                                        <small class="mb-0 text-muted">15 Oct</small>
                                    </div>
                                </div>
                                <div class="acitivity-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">New ticket received <span class="badge bg-success-subtle text-success align-middle">Completed</span></h6>
                                        <p class="text-muted mb-2">User <span class="text-secondary">Erica245</span> submitted a ticket.</p>
                                        <small class="mb-0 text-muted">26 Aug</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="projects" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-warning">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Chat App Update</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 year Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        J
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">ABC Project Customization</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">2 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-primary-subtle text-primary fs-10"> Progress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-info">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Client - Frank Hook</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">1 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        M
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Velzon Project</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">11 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-danger">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Brand Logo Design</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">10 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        E
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Chat App</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">8 hr Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        R
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-warning">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Project Update</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">48 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-warning-subtle text-warning fs-10">Inprogress</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Client - Jennifer</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">30 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-primary-subtle text-primary fs-10">Process</div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0"> Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-xxl-0 profile-project-info">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Bsuiness Template - UI/UX design</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">7 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-xxl-0  profile-project-success">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Update Project</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">1 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-light text-primary">
                                                                        A
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-sm-0  profile-project-danger">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">Bank Management System</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">10 month Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-success-subtle text-success fs-10">Completed</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <div class="avatar-title rounded-circle bg-primary">
                                                                        2+
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card profile-project-card shadow-none mb-0  profile-project-primary">
                                        <div class="card-body p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 text-muted overflow-hidden">
                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-body">PSD to HTML Convert</a></h5>
                                                    <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-body">29 min Ago</span></p>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="badge bg-info-subtle text-info fs-10">New</div>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-4">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div>
                                                            <h5 class="fs-12 text-muted mb-0">Members :</h5>
                                                        </div>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <div class="avatar-xs">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <ul class="pagination pagination-separated justify-content-center mb-0">
                                            <li class="page-item disabled">
                                                <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="javascript:void(0);" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="javascript:void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="documents" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                <div class="flex-shrink-0">
                                    <input class="form-control d-none" type="file" id="formFile">
                                    <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload File</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-borderless align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Upload Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                    <i class="ri-file-zip-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Zip File</td>
                                                    <td>4.57 MB</td>
                                                    <td>12 Dec 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                    <i class="ri-file-pdf-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank Management System</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>PDF File</td>
                                                    <td>8.89 MB</td>
                                                    <td>24 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                    <i class="ri-video-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>MP4 File</td>
                                                    <td>14.62 MB</td>
                                                    <td>19 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                    <i class="ri-file-excel-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>XSL File</td>
                                                    <td>2.38 KB</td>
                                                    <td>14 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                    <i class="ri-folder-line"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project Screenshots Collection</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Floder File</td>
                                                    <td>87.24 MB</td>
                                                    <td>08 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                    <i class="ri-image-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="ms-3 flex-grow-1">
                                                                <h6 class="fs-15 mb-0">
                                                                    <a href="javascript:void(0);">Velzon-logo.png</a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>PNG File</td>
                                                    <td>879 KB</td>
                                                    <td>02 Nov 2021</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-equalizer-fill"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
            </div>
            <!--end tab-content-->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

</div><!-- container-fluid -->
</div><!-- End Page-content -->
 @endsection()   

