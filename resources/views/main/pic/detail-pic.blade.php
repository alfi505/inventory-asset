@extends('layouts.app')

@section('title', 'Detail Data PIC')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/pic">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Detail Data CPU</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/pic') }}">Pic</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Detail Pic</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr hidden>
                                    <th style="width: 15%">ID PIC</th>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $pic->id }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Komputer</th>
                                    <td>:</td>
                                    <td>{{ $pic->nama_komputer }}</td>
                                </tr>
                                <tr>
                                    <th>Nama PIC</th>
                                    <td>:</td>
                                    <td>{{ $pic->nama_pic }}</td>
                                </tr>
                                <tr>
                                    <th>Posisi</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>ID CPU</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_cpu ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Monitor</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_monitor ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Keyboard</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_keyboard ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Mouse</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_mouse ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Speaker</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_speaker ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Network</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_network ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th>ID Printer</th>
                                    <td>:</td>
                                    <td>{{ $pic->id_printer ?? '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
