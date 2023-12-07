@extends('layouts.app')

@section('title', 'Detail Data Monitor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Data Monitor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-monitor') }}">Inventory Monitor</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Detail Monitor</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID Monitor</th>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $monitor->id_monitor }}</td>
                                </tr>
                                <tr>
                                    <th>Merk Monitor</th>
                                    <td>:</td>
                                    <td>{{ $monitor->merk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Model Monitor</th>
                                    <td>:</td>
                                    <td>{{ $monitor->model_monitor }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Perangkat</th>
                                    <td>:</td>
                                    <td>{{ $monitor->jenisperangkat->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>:</td>
                                    <td>21-November-2022</td>
                                </tr>
                                <tr>
                                    <th>Posisi</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>No IP Address</th>
                                    <td>:</td>
                                    {{-- <td>{{ $monitorData->workstation_id }}</td> --}}
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>{{ $monitor->serial_number }}</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    {{-- <td>{{ $monitorData->vendor->perusahaan }}</td> --}}
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>:</td>
                                    <td>{{ $monitor->admin }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td>{{ $monitor->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>{{ $monitor->status->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/inventory-monitor" class="btn btn-primary text-right">Kembali</a>
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
