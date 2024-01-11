@extends('layouts.app')

@section('title', 'Merk')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Merk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/utilities-merk') }}">Merk</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Tambah Merk</div>
                </div>
            </div>

            <form action="{{ url('/utilities-merk') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>Merk</label>
                                <input type="text" class="form-control" name="merk" id="merk"
                                    placeholder="Contoh: LGH, PHL">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangab"
                                    placeholder="Contoh: Logitech, Phillips">
                            </div>
                        </div>
                    </div>
            </form>

            <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                <div class="buttons">
                    <button class="btn btn-primary" type="submit" name="submit" id="submit">Tambah</button>
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
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
