@extends('layouts.app-user')

@section('title', 'Detail Data CPU')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
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
                                    <th style="width: 15%">ID CPU</th>
                                    <td style="width: 1%">:</td>
                                    <td>MAK/IT/CPU-RKT/1105/6024</td>
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
                                    <th>Nomor IP Address</th>
                                    <td>:</td>
                                    <td>127.11.1.156</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>:</td>
                                    <td>Administrasi</td>
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>9864-0998-3422-8847</td>
                                </tr>
                                <tr>
                                    <th>OS</th>
                                    <td>:</td>
                                    <td>Windows 10</td>
                                </tr>
                                <tr>
                                    <th>Processor</th>
                                    <td>:</td>
                                    <td>Intel i5 12450H</td>
                                </tr>
                                <tr>
                                    <th>Mainboard</th>
                                    <td>:</td>
                                    <td>MSI H670</td>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <td>:</td>
                                    <td>8GB DDR5</td>
                                </tr>
                                <tr>
                                    <th>ROM</th>
                                    <td>:</td>
                                    <td>1TB NVME</td>
                                </tr>
                                <tr>
                                    <th>VGA</th>
                                    <td>:</td>
                                    <td>NVIDIA RTX 5090</td>
                                </tr>
                                <tr>
                                    <th>Soundcard</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>CDRom</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>NIC</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>MAC</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Casing</th>
                                    <td>:</td>
                                    <td>Digital Alliance N23</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    <td>ELS Komputer</td>
                                </tr>
                                <tr>
                                    <th>Software Lain</th>
                                    <td>:</td>
                                    <td>MS Office 2019, Corel Draw</td>
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
                        <a href="/inventory-cpu-user" class="btn btn-primary text-right">Kembali</a>
                    </div>
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
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
