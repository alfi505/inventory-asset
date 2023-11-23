@extends('layouts.app')

@section('title', 'Detail Data Monitor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@foreach ($monitor as $monitorItem)
@endforeach
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Data Monitor</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID Monitor</th>
                                    <td style="width: 1%">:</td>
                                    {{-- <td>MAK/IT/MTR-PHL/1121/1144</td> --}}
                                    <td>{{ $inventory }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Komputer</th>
                                    <td>:</td>
                                    <td>Parangkusumo</td>
                                </tr>
                                <tr>
                                    <th>Nama PIC</th>
                                    <td>:</td>
                                    <td>Alfi</td>
                                </tr>
                                <tr>
                                    <th>ID CPU</th>
                                    <td>:</td>
                                    <td>MAK/IT/CPU-RKT/1105/6024</td>
                                </tr>
                                <tr>
                                    <th>Merk Monitor</th>
                                    <td>:</td>
                                    <td>Phillips</td>
                                </tr>
                                <tr>
                                    <th>Model Monitor</th>
                                    <td>:</td>
                                    <td>Phillips 203v</td>
                                </tr>
                                <tr>
                                    <th>Jenis Perangkat</th>
                                    <td>:</td>
                                    <td>Monitor</td>
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
                                    <td>127.11.1.156</td>
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>3423-3453-7876-2332</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    <td>ELS Komputer</td>
                                </tr>
                                <tr>
                                    <th>Admin</th>
                                    <td>:</td>
                                    <td>Udin</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>Continue - Baik</td>
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