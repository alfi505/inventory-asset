@extends('layouts.app')

@section('title', 'Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-computer"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>CPU</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalCpu }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Monitor</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalMonitor }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-keyboard"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Keyboard</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalKeyboard }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-mouse"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Mouse</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalMouse }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Speaker</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalSpeaker }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Network</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalNetwork }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-print"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Printer</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalPrinter }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-person"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>PIC</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalPic }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-print"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Workstation</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalWorkstation }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Perolehan</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart_inventory" width="1200" height="400"></canvas>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Jumlah</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart_pic" width="1200" height="400"></canvas>
                    </div>
                </div>
            </div> --}}

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
    {{-- <script src='https://cdn.jsdelivr.net/npm/chart.js'></script> --}}

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-chartjs.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/page/dashboard.js') }}"></script>

    <script>
        function date_time(id) {
            var date = new Date();
            var tahun = date.getFullYear();
            var bulan = date.getMonth();
            var tanggal = date.getDate();
            var hari = date.getDay();

            var namabulan = new Array(
                "Januari",
                "Februari",
                "Maret",
                "April",
                "Mei",
                "Juni",
                "Juli",
                "Agustus",
                "September",
                "Oktober",
                "November",
                "Desember"
            );
            var namahari = new Array(
                "Minggu",
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jumat",
                "Sabtu"
            );

            var h = date.getHours();
            if (h < 10) {
                h = "0" + h;
            }
            var m = date.getMinutes();
            if (m < 10) {
                m = "0" + m;
            }
            var s = date.getSeconds();
            if (s < 10) {
                s = "0" + s;
            }
            var result =
                namahari[hari] +
                ", " +
                tanggal +
                " " +
                namabulan[bulan] +
                " " +
                tahun +
                " / " +
                h +
                ":" +
                m +
                ":" +
                s;
            document.getElementById(id).innerHTML = result;
            setTimeout('date_time("' + id + '");', "1000");
            return true;
        }

        document.addEventListener("DOMContentLoaded", () => {
            $(document).ready(function() {
                window.onload = date_time("date_time");
                $(".tag-true").select2({
                    tags: true,
                });
            });
        });
    </script>
@endpush
