@extends('layouts.app')

@section('title', 'Monitor')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Monitor</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-monitor') }}">Inventory Monitor</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Tambah Monitor</div>
                </div>
            </div>

            <form action="{{ url('/inventory-monitor') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>ID Monitor</label>
                                    <input type="text" class="form-control" name="id_monitor" id="id_monitor">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>PIC</label>
                                <select class="form-control select2" name="pic_id" id="pic_id">
                                    <option value="1">Alfi</option>
                                    <option value="2">Alfi2</option>
                                    <option value="3">Alfi3</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Serial Number</label>
                                <input type="text" class="form-control" name="serial_number" id="serial_number" required>
                            </div>
                            <div class="form-group col">
                                <label>Model Monitor</label>
                                <input type="text" class="form-control" name="model_monitor" id="model_monitor" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Jenis Perangkat</label>
                                <select class="form-control select2" name="jenisperangkat_id" id="jenisperangkat_id">
                                    @foreach ($jenisPerangkat as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Merk Monitor</label>
                                <select class="form-control select2" name="merk_id" id="merk_id">
                                    @foreach ($merk as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Workstation</label>
                                <select class="form-control select2" name="workstation_id" id="workstation_id">
                                    @foreach ($workstation as $data)
                                        <option value="{{ $data->id }}">{{ $data->no_ip_address }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Vendor</label>
                                <select class="form-control select2" name="vendor_id" id="vendor_id">
                                    @foreach ($vendor as $data)
                                        <option value="{{ $data->id }}">{{ $data->perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Tanggal Input</label>
                                <input type="text" class="form-control" name="tanggal_input" id="tanggal_input">
                            </div>
                            <div class="form-group col">
                                <label>Admin</label>
                                <input type="text" class="form-control" name="admin" id="admin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pilih Status</label>
                            <select class="form-control select2" name="status_id" id="status_id">
                                @foreach ($status as $data)
                                    <option value="{{ $data->id }}">{{ $data->status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" style="height: 100%" name="keterangan" id="keterangan"></textarea>
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
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
