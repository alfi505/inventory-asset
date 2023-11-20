@extends('layouts.app')

@section('title', 'Monitor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Monitor</h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>ID Monitor</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Nama Komputer</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label>Nama PIC</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>ID CPU</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Merk Monitor</label>
                            <select class="form-control">
                                <option>Phillips</option>
                                <option>Lenovo</option>
                                <option>LG</option>
                            </select>
                        </div>
                        <div class="form-group col">
                            <label>Model Monitor</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Serial Number</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label>Jenis Perangkat</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>ID IP</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label>Admin</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label>Tanggal</label>
                            <input type="text" class="form-control datepicker">
                        </div>
                        <div class="form-group col">
                            <label>Vendor</label>
                            <select class="form-control">
                                <option>Ace Komputer</option>
                                <option>ELS Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Status</label>
                        <select class="form-control">
                            <option>Continue - Baik</option>
                            <option>Continue - Rusak</option>
                            <option>Discontinue</option>
                            <option>Dimusnahkan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="Keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" style="height: 100%"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                    <div class="buttons">
                        <a href="/inventory-monitor" class="btn btn-primary">Tambah</a>
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
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
