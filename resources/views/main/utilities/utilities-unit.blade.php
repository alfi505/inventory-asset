@extends('layouts.app')

@section('title', 'Unit')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Unit</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-person"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Unit</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-6 col-12 text-right">
                    <div class="buttons py-5">
                        <a href="/tambah-unit" class="btn btn-primary">Tambah Unit</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Unit</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 30%">Direktorat</th>
                                        <th style="width: 30%">Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>HRD</td>
                                        <td>HRD</td>
                                        <td>
                                            <a href="/detail-unit" class="btn btn-info">Detail</a>
                                            <a href="#" class="btn btn-secondary">Edit</a>
                                            <a href="#">
                                                <button class="btn btn-danger" id="swal-6">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>IT</td>
                                        <td>IT</td>
                                        <td>
                                            <a href="#" class="btn btn-info">Detail</a>
                                            <a href="#" class="btn btn-secondary">Edit</a>
                                            <a href="#">
                                                <button class="btn btn-danger" id="swal-6">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>HE</td>
                                        <td>HE</td>
                                        <td>
                                            <a href="#" class="btn btn-info">Detail</a>
                                            <a href="#" class="btn btn-secondary">Edit</a>
                                            <a href="#">
                                                <button class="btn btn-danger" id="swal-6">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
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

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush