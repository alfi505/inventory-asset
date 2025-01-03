@extends('layouts.app')

@section('title', 'CPU')

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
                <h1>CPU</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-cpu') }}">Inventory Cpu</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Tambah Cpu</div>
                </div>
            </div>

            <form action="{{ url('inventory-cpu') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Form Tambah</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>PIC</label>
                                <select class="form-control select2" name="pic_id" id="pic_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($pic as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_pic }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Nama Komputer</label>
                                <input type="text" class="form-control" name="hostname" id="hostname">
                            </div>
                            <div class="form-group col">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="kategori">
                            </div>
                            <div class="form-group col">
                                <label>Serial Number</label>
                                <input type="text" class="form-control" name="serial_number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>OS</label>
                                <input type="text" class="form-control" name="os">
                            </div>
                            <div class="form-group col">
                                <label>Processor</label>
                                <input type="text" class="form-control" name="processor">
                            </div>
                            <div class="form-group col">
                                <label>Mainboard</label>
                                <input type="text" class="form-control" name="mainboard">
                            </div>
                            <div class="form-group col">
                                <label>RAM</label>
                                <input type="text" class="form-control" name="ram">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>ROM</label>
                                <input type="text" class="form-control" name="rom">
                            </div>
                            <div class="form-group col">
                                <label>VGA</label>
                                <input type="text" class="form-control" name="vga">
                            </div>
                            <div class="form-group col">
                                <label>Soundcard</label>
                                <input type="text" class="form-control" name="soundcard">
                            </div>
                            <div class="form-group col">
                                <label>CDRom</label>
                                <input type="text" class="form-control" name="cdroom">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>NIC</label>
                                <input type="text" class="form-control" name="nic">
                            </div>
                            <div class="form-group col">
                                <label>MAC</label>
                                <input type="text" class="form-control" name="mac">
                            </div>
                            <div class="form-group col">
                                <label>Casing</label>
                                <input type="text" class="form-control" name="casing">
                            </div>
                            <div class="form-group col">
                                <label>Admin</label>
                                <select class="form-control select2" name="admin" id="admin">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($admin as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Merk Cpu</label>
                                <select class="form-control select2" name="merk_id" id="merk_id">
                                    @foreach ($merks as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Vendor</label>
                                <select class="form-control select2" name="vendor_id" id="vendor_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($vendor as $data)
                                        <option value="{{ $data->id }}">{{ $data->perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Software</label>
                                <select class="form-control select2" name="software_id[]" id="software_id" multiple>
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($software as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_software }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Pilih Status</label>
                                <select class="form-control select2" name="status_id" id="status_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($status as $data)
                                        <option value="{{ $data->id }}">{{ $data->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Workstation</label>
                                <select class="form-control select2" name="workstation_id" id="workstation_id">
                                    <option value="0">-</option>
                                    @foreach ($workstation as $data)
                                        <option value="{{ $data->id }}">{{ $data->no_ip_address }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Tanggal Perolehan</label>
                                <input type="date" class="form-control" name="tanggal_input" id="tanggal_input">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" style="height: 100%" name="keterangan" id="keterangan"></textarea>
                            </div>
                            <div class="form-group col" hidden>
                                <label>Jenis Perangkat</label>
                                <select class="form-control select2" name="jenisperangkat_id" id="jenisperangkat_id">
                                    @foreach ($jenisPerangkat as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
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

    <script>
        $(".select2").select2({
            tags: true
        });
    </script>
    {{-- <script>
        $(document).ready(function() {
            // Listen for the select2:select event
            $('#workstation_id').on('select2:select', function(e) {
                // Get the selected data
                var selectedData = e.params.data;

                fetch('/api/cekHostname/' + selectedData.text)
                    .then(response => response.json())
                    .then(data => {
                        // Handle the fetched data
                        // $('#result').text(JSON.stringify(data, null, 2));
                        console.log(data.data.hostname);
                        $('#nama_komputer').val(data.data.hostname);
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script> --}}
@endpush
