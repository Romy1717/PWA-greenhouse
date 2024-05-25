@extends('layouts.dashboard-Layout')

@section('title', 'Gestión de invernaderos')

@section('content')
<div class="row">
    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Temperatura</p>
                        <h2 class="mt-4 ff-secondary fw-semibold">
                            <span class="counter-value" data-target="">{{ $latestTemperature }}</span>
                        </h2>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <svg width="20" height="20" fill="currentColor" class="bi bi-fire text-danger" viewBox="0 0 16 16">
                                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div> <!-- end card-->
    </div> <!-- end col-->

    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Humedad</p>
                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">{{ $latestHumidity }}</span></h2>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                <svg height="20" fill="currentColor" class="bi bi-droplet-half text-primary" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div> <!-- end card-->
    </div> <!-- end col-->   

    <div class="col-xl-4">
        <div class="card card-animate">
            <div class="card-body">
                <form action="{{ route('updateSetValues') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Parámetros</p>
                            <div class="form-outline mb-2">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label" for="setT">Temperatura</label>
                                        <input type="text" id="setT" name="setT" class="form-control form-control-sm w-60" placeholder="#" value="{{ $latestRecord->setT ?? '' }}" required />
                                    </div>
                                    <div>
                                        <label class="form-label" for="setH">Humedad</label>
                                        <input type="text" id="setH" name="setH" class="form-control form-control-sm w-60" placeholder="#" value="{{ $latestRecord->setH ?? '' }}" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Temperatura</h4>
            </div>
            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Temperatura</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($TemperatureHumidity as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->temperature }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Humedad</h4>
            </div>
            <div class="card-body">
                <div class="live-preview">
                    <div class="table-responsive">
                        <table class="table table-striped table-nowrap align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Humedad</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($TemperatureHumidity as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->humidity }}</td>
                                    <td>{{ $data->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Temperatura</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="line_chart_basic_1" class="apex-charts" data-colors='["#34c38f"]' dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Humedad</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="line_chart_basic_2" class="apex-charts" data-colors='["#556ee6"]' dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <!-- end col -->
</div>

<!-- end row -->
@section('scripts')
 <!-- JAVASCRIPT -->
 <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/libs/simplebar/simplebar.min.js"></script>
 <script src="assets/libs/node-waves/waves.min.js"></script>
 <script src="assets/libs/feather-icons/feather.min.js"></script>
 <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
 <script src="assets/js/plugins.js"></script>

 <!-- apexcharts -->
 <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

 <script src="https://img.themesbrand.com/velzon/apexchart-js/stock-prices.js"></script>

 <!-- linecharts init -->
 <script src="assets/js/pages/apexcharts-line.init.js"></script>

 <!-- App js -->
 <script src="assets/js/app.js"></script>
 <!-- Incluye la librería de ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener datos de temperatura y humedad de PHP
        var temperatureData = @json($temperatureData);
        var humidityData = @json($humidityData);
        var dates = @json($dates);
    
        var options1 = {
            chart: {
                type: 'line',
                height: 350,
                zoom: {
                    enabled: false
                }
            },
            series: [{
                name: 'Temperatura',
                data: temperatureData
            }],
            xaxis: {
                categories: dates
            },
            colors: ["#34c38f"]
        };
    
        var options2 = {
            chart: {
                type: 'line',
                height: 350,
                zoom: {
                    enabled: false
                }
            },
            series: [{
                name: 'Humedad',
                data: humidityData
            }],
            xaxis: {
                categories: dates
            },
            colors: ["#556ee6"]
        };
    
        var chart1 = new ApexCharts(document.querySelector("#line_chart_basic_1"), options1);
        chart1.render();
    
        var chart2 = new ApexCharts(document.querySelector("#line_chart_basic_2"), options2);
        chart2.render();
    });
</script>
    

@endsection()             
@endsection()
