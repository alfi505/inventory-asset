@extends('layouts.app')

@section('title', 'CPU')

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
                <h1>CPU</h1>
            </div>

            <form action="{{ url('inventory-cpu') }}" method="post">
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>ID CPU</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Nama Komputer</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col">
                                <label>Tanggal Input</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Kategori</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Serial Number</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>OS</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Processor</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Mainboard</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>RAM</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>ROM</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>VGA</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Soundcard</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>CDRom</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>NIC</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Casing</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Vendor</label>
                                <select class="form-control select2" name="vendor_id" id="vendor_id"></select>
                            </div>
                            <div class="form-group col">
                                <label>Software</label>
                                <select class="form-control select2" name="software_id" id="software_id"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option>Continue - Baik</option>
                                <option>Continue - Rusak</option>
                                <option>Discontinue</option>
                                <option>Dimusnahkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <a href="/inventory-cpu" class="btn btn-primary">Sumbit</a>
                        </div>
                    </div>
                </div>
            </form>

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
