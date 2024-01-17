@extends('layouts.app')

@section('title', 'Vendor')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/utilities-vendor">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Vendor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/utilities-vendor') }}">Vendor</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Edit Vendor</div>
                </div>
            </div>

            <form action="{{ url('/utilities-vendor' . '/' . $vendor->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $vendor->nama }}">
                            </div>
                            <div class="form-group col">
                                <label>Perusahaan</label>
                                <input type="text" class="form-control" name="perusahaan"
                                    value="{{ $vendor->perusahaan }}">
                            </div>
                            <div class="form-group col">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" value="{{ $vendor->jabatan }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" style="height: 100%">{{ $vendor->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col mt-4">
                                <label>Kota</label>
                                <input type="text" class="form-control" name="kota" value="{{ $vendor->kota }}">
                            </div>
                            <div class="form-group col mt-4">
                                <label>Daerah</label>
                                <input type="text" class="form-control" name="daerah" value="{{ $vendor->daerah }}">
                            </div>
                            <div class="form-group col mt-4">
                                <label>Kode Pos</label>
                                <input type="number" class="form-control" name="kode pos" value="{{ $vendor->kode_pos }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Nomor Telpon</label>
                                <input type="number" name="no_telpon" class="form-control"
                                    value="{{ $vendor->no_telpon }}">
                            </div>
                            <div class="form-group col">
                                <label>Fax</label>
                                <input type="number" class="form-control" name="fax" value="{{ $vendor->fax }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="tambahan" style="height: 100%">{{ $vendor->tambahan }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit" name="submit">Edit</button>
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

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
