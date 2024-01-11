@extends('layouts.app')

@section('title', 'Direktorat')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/utilities-dir">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Direktorat</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/utilities-dir') }}">Direktorat</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Edit Direktorat</div>
                </div>
            </div>

            <form action="{{ url('/utilities-dir' . '/' . $direktorat->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>Direktorat</label>
                                <input type="text" class="form-control" name="direktorat"
                                    value="{{ $direktorat->direktorat }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" style="height: 100%">{{ $direktorat->keterangan }}</textarea>
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
