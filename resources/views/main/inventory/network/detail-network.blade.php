@extends('layouts.app')

@section('title', 'Detail Data Network')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/inventory-network">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Detail Data Network</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-network') }}">Inventory Network</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Detail Network</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID Network</th>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $network->id_network }}</td>
                                </tr>
                                <tr>
                                    <th>Merk Network</th>
                                    <td>:</td>
                                    <td>{{ $network->merk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Model Network</th>
                                    <td>:</td>
                                    <td>{{ $network->model_network }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Perangkat</th>
                                    <td>:</td>
                                    <td>{{ $network->jenisperangkat->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>:</td>
                                    <td>{{ $network->tanggal_input }}</td>
                                </tr>
                                <tr>
                                    <th>Posisi</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>No IP Address</th>
                                    <td>:</td>
                                    <td>{{ $networkData->Workstation->no_ip_address ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>{{ $network->serial_number }}</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    <td>{{ $networkData->id_vendor->perusahaan ?? 'N/A' }}</td>
                                </tr>
                                {{-- <tr>
                                    <th>Admin</th>
                                    <td>:</td>
                                    <td>{{ $network->admin }}</td>
                                </tr> --}}
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td>{{ $network->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>{{ $network->status->status }}</td>
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
