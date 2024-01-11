@extends('layouts.app')

@section('title', 'Detail Data Mouse')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/inventory-mouse">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Detail Data Mouse</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-mouse') }}">Inventory Mouse</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Detail Mouse</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID Mouse</th>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $mouse->id_mouse }}</td>
                                </tr>
                                <tr>
                                    <th>Merk Mouse</th>
                                    <td>:</td>
                                    <td>{{ $mouse->merk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Model Mouse</th>
                                    <td>:</td>
                                    <td>{{ $mouse->model_mouse }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Perangkat</th>
                                    <td>:</td>
                                    <td>{{ $mouse->jenisperangkat->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>:</td>
                                    <td>{{ $mouse->tanggal_input }}</td>
                                </tr>
                                <tr>
                                    <th>Posisi</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>No IP Address</th>
                                    <td>:</td>
                                    <td>{{ $mouseData->Workstation->no_ip_address ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>{{ $mouse->serial_number }}</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    <td>{{ $mouseData->id_vendor->perusahaan ?? 'N/A' }}</td>
                                </tr>
                                {{-- <tr>
                                    <th>Admin</th>
                                    <td>:</td>
                                    <td>{{ $mouse->admin }}</td>
                                </tr> --}}
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>{{ $mouse->status->status }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td>{{ $mouse->keterangan }}</td>
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
