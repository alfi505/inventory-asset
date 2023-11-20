@extends('layouts.app-user')

@section('title', 'Detail Data PIC')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Data CPU</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID PIC</th>
                                    <td style="width: 1%">:</td>
                                    <td>MAK/001</td>
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
                                    <th>Zona</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>ID CPU</th>
                                    <td>:</td>
                                    <td>MAK/IT/CPU-RKT/1105/6024</td>
                                </tr>
                                <tr>
                                    <th>ID Monitor</th>
                                    <td>:</td>
                                    <td>MAK/IT/MTR-PHL/1121/1144</td>
                                </tr>
                                <tr>
                                    <th>ID Keyboard</th>
                                    <td>:</td>
                                    <td>MAK/IT/KBR-LGH/0819/2010</td>
                                </tr>
                                <tr>
                                    <th>ID Mouse</th>
                                    <td>:</td>
                                    <td>MAK/IT/MOS-LGH/0420/3120</td>
                                </tr>
                                <tr>
                                    <th>ID Speaker</th>
                                    <td>:</td>
                                    <td>MAK/IT/SPK-LGH/0501/4061</td>
                                </tr>
                                <tr>
                                    <th>ID Network</th>
                                    <td>:</td>
                                    <td>MAK/IT/SWC-TPL/1106/5115</td>
                                </tr>
                                <tr>
                                    <th>ID Printer</th>
                                    <td>:</td>
                                    <td>MAK/IT/PTR-BTR/0723/7012</td>
                                </tr>
                                <tr>
                                    <th>Posisi</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <a href="/data-pic-user" class="btn btn-primary text-right">Kembali</a>
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
