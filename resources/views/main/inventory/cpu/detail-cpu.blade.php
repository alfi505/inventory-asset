@extends('layouts.app')

@section('title', 'Detail Data CPU')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <a href="/inventory-cpu">
                    <i class="fas fa-arrow-left ml-1"></i>
                </a>
                <h1 class="ml-3">Detail Data CPU</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-cpu') }}">Inventory Cpu</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Detail Cpu</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-body">
                        <table class="table-striped table" id="table-1">
                            <tbody>
                                <tr>
                                    <th style="width: 15%">ID CPU</th>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $cpu->id_cpu }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Komputer</th>
                                    <td>:</td>
                                    <td>{{ $cpu->nama_komputer }}</td>
                                </tr>
                                <tr>
                                    <th>Nama PIC</th>
                                    <td>:</td>
                                    <td>{{ $cpuData->PIC->nama_pic ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>No IP Address</th>
                                    <td>:</td>
                                    <td>{{ $cpuData->Workstation->no_ip_address ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Zona</th>
                                    <td>:</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>:</td>
                                    <td>{{ $cpu->kategori }}</td>
                                </tr>
                                <tr>
                                    <th>Serial Number</th>
                                    <td>:</td>
                                    <td>{{ $cpu->serial_number }}</td>
                                </tr>
                                <tr>
                                    <th>OS</th>
                                    <td>:</td>
                                    <td>{{ $cpu->os }}</td>
                                </tr>
                                <tr>
                                    <th>Processor</th>
                                    <td>:</td>
                                    <td>{{ $cpu->processor }}</td>
                                </tr>
                                <tr>
                                    <th>Mainboard</th>
                                    <td>:</td>
                                    <td>{{ $cpu->mainboard }}</td>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <td>:</td>
                                    <td>{{ $cpu->ram }}</td>
                                </tr>
                                <tr>
                                    <th>ROM</th>
                                    <td>:</td>
                                    <td>{{ $cpu->rom }}</td>
                                </tr>
                                <tr>
                                    <th>VGA</th>
                                    <td>:</td>
                                    <td>{{ $cpu->vga }}</td>
                                </tr>
                                <tr>
                                    <th>Soundcard</th>
                                    <td>:</td>
                                    <td>{{ $cpu->soundcard }}</td>
                                </tr>
                                <tr>
                                    <th>CDRom</th>
                                    <td>:</td>
                                    <td>{{ $cpu->cdroom }}</td>
                                </tr>
                                <tr>
                                    <th>NIC</th>
                                    <td>:</td>
                                    <td>{{ $cpu->nic }}</td>
                                </tr>
                                <tr>
                                    <th>MAC</th>
                                    <td>:</td>
                                    <td>{{ $cpu->mac }}</td>
                                </tr>
                                <tr>
                                    <th>Casing</th>
                                    <td>:</td>
                                    <td>{{ $cpu->casing }}</td>
                                </tr>
                                <tr>
                                    <th>Vendor</th>
                                    <td>:</td>
                                    {{-- <td>{{ $cpuData->vendor_id }}</td> --}}
                                </tr>
                                <tr>
                                    <th>Software Lain</th>
                                    <td>:</td>
                                    {{-- <td>{{ $cpuData->software_id }}</td> --}}
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>{{ $cpu->status->status }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>:</td>
                                    <td>{{ $cpu->keterangan }}</td>
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
