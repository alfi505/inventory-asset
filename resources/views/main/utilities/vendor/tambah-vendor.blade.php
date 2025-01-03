@extends('layouts.app')

@section('title', 'Vendor')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Vendor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/utilities-vendor') }}">Vendor</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Tambah Vendor</div>
                </div>
            </div>

            <form action="{{ url('/utilities-vendor') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group col">
                                <label>Perusahaan</label>
                                <input type="text" class="form-control" name="perusahaan">
                            </div>
                            <div class="form-group col">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="jabatan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" style="height: 100%"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mt-4">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota">
                            </div>
                            <div class="form-group col mt-4">
                                <label>Daerah</label>
                                <input type="text" class="form-control" name="daerah">
                            </div>
                            <div class="form-group col mt-4">
                                <label>Kode Pos</label>
                                <input type="number" class="form-control" name="kode pos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Nomor Telpon</label>
                                <input type="number" name="no_telpon" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Fax</label>
                                <input type="number" class="form-control" name="fax">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="tambahan" style="height: 100%"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit" name="submit" id="submit">Tambah</button>
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
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
