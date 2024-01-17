@extends('layouts.app')

@section('title', 'PIC')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>PIC</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/data-pic">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-person"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>PIC</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalCountpic }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="/workstation">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Workstation</h4>
                                </div>
                                <div class="card-body">
                                    {{ $totalCount1 }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            {{-- <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart_pic" width="1200" height="400"></canvas>
                    </div>
                </div>
            </div> --}}
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
    <script src="{{ asset('js/page/pic.js') }}"></script>
@endpush
