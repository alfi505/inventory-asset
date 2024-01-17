@extends('layouts.app')

@section('title', 'Workstation')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Workstation</h1>
            </div>

            <form action="{{ url('/workstation') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" class="form-control" name="no_ip_address">
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

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
