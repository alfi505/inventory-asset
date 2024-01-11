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
                                {{-- <p class="form-control">
                                    Monitor
                                </p> --}}
                                <select class="form-control select2" name="jenisperangkat_id" id="jenisperangkat_id">
                                    @foreach ($jenisPerangkat as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Merk Monitor</label>
                                <select class="form-control select2" name="merk_id" id="merk_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($merks as $data)
                                        <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
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
                                <label>Vendor</label>
                                <select class="form-control select2" name="vendor_id" id="vendor_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($vendor as $data)
                                        <option value="{{ $data->id }}">{{ $data->perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Tanggal Perolehan</label>
                                <input type="date" class="form-control" name="tanggal_input" id="tanggal_input">
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
                                <label>Pilih Status</label>
                                <select class="form-control select2" name="status_id" id="status_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($status as $data)
                                        <option value="{{ $data->id }}">{{ $data->status }}</option>
                                    @endforeach
                                </select>
                            </div>
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
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
    <script src="{{ asset('js/page/index-0.js') }}"></script>

    <script>
        $(".select2").select2({
            tags: true
        });
    </script>


    {{-- <script>
        let id_perangkat = ''
        let nama_perangkat = ''
        let tgl_input = ''

        const InputIdEl = document.querySelector('#id_monitor')
        const InputDateEl = document.querySelector('#tanggal_input')

        $('#jenisperangkat_id').on('select2:select', function(e) {
            id_perangkat = $('#jenisperangkat_id').val()
            changeInputID(id_perangkat, nama_perangkat, tgl_input)
        });
        $('#merk_id').on('select2:select', function(e) {
            nama_perangkat = $('#merk_id').val()
            changeInputID(id_perangkat, nama_perangkat, tgl_input)
        });

        InputDateEl.addEventListener('change', () => {
            tgl_input = InputDateEl.value
            changeInputID(id_perangkat, nama_perangkat, tgl_input)
        })

        let sumDevices = @json($monitors);
        let devices = @json($jenisPerangkat);

        function changeInputID(id = '', nama = '', tgl = '') {
            let tmp = 'MAK/IT'
            let result = ''
            if (id !== '') {
                result = `${tmp}/${id}`
            }

            if (id !== '' && nama !== '') {
                result = `${result}-${nama}`
            }

            if (id !== '' && nama !== '' && tgl !== '') {
                const device = devices.filter((data) => data.jenisperangkat === id)[0]
                let tmpNumber = sumDevices.length
                let numberStr = ''
                if (tmpNumber < 100) {
                    numberStr = '0' + tmpNumber
                } else if (tmpNumber < 10) {
                    numberStr = '00' + tmpNumber
                } else {

                    numberStr = '000' + tmpNumber
                }

                result = `${result}/${tgl}/${device.id_detail}${numberStr}`
            }

            InputIdEl.value = result
        }
    </script> --}}
@endpush
