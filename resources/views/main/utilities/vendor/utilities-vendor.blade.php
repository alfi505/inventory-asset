@extends('layouts.app')

@section('title', 'Vendor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Vendor</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-person"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Vendor</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-6 col-12 text-right">
                    <div class="buttons py-5">
                        <a href="/tambah-vendor" class="btn btn-primary">Tambah Vendor</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Vendor</h4>
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
                                        <th>Nama</th>
                                        <th>Perusahaan</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Daerah</th>
                                        <th>Kode Pos</th>
                                        <th>No Telpon</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ayala</td>
                                        <td>Kita Kuat Komputer</td>
                                        <td>Teknisi</td>
                                        <td>Yogyakarta</td>
                                        <td>Sleman</td>
                                        <td>Dalem</td>
                                        <td>55620</td>
                                        <td>073548853487</td>
                                        <td>
                                            <a href="/detail-vendor" class="btn btn-info">Detail</a>
                                            <a href="#" class="btn btn-secondary">Edit</a>
                                            <a href="#">
                                                <button class="btn btn-danger" id="swal-6">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Harry</td>
                                        <td>Harus Komputer</td>
                                        <td>Teknisi</td>
                                        <td>Yogyakarta</td>
                                        <td>Bantul</td>
                                        <td>Jauh</td>
                                        <td>55670</td>
                                        <td>098745629864</td>
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
                                        <td>Zamora</td>
                                        <td>Ngebut Komputer</td>
                                        <td>Teknisi</td>
                                        <td>Yogyakarta</td>
                                        <td>Depok</td>
                                        <td>Luar</td>
                                        <td>55690</td>
                                        <td>065409787322</td>
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
