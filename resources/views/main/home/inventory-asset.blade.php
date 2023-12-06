@extends('layouts.app')

@section('title', 'Inventory Asset')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Inventory Asset</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-cpu') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-computer"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>CPU</h4>
                                </div>
                                <div class="card-body">
                                    10
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-monitor') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Monitor</h4>
                                </div>
                                <div class="card-body">
                                    42
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-keyboard') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-keyboard"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Keyboard</h4>
                                </div>
                                <div class="card-body">
                                    1,201
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-mouse') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-mouse"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Mouse</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-speaker') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-headphones"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Speaker</h4>
                                </div>
                                <div class="card-body">
                                    56
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-network') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Network</h4>
                                </div>
                                <div class="card-body">
                                    87
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="{{ url('/inventory-printer') }}">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-print"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Printer</h4>
                                </div>
                                <div class="card-body">
                                    110
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Perolehan</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart_inventory" width="1200" height="400"></canvas>
                    </div>
                </div>
            </div>

    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    {{-- <script src='https://cdn.jsdelivr.net/npm/chart.js'></script> --}}

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/inventory.js') }}"></script>
@endpush
