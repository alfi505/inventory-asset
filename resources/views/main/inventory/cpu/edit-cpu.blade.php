@extends('layouts.app')

@section('title', 'Cpu')

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
                <h1>Cpu</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('/inventory-cpu') }}">Inventory Cpu</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Edit Cpu</div>
                </div>
            </div>

            <form action="{{ url('/inventory-cpu') . '/' . str_replace('/', '_', $data->id_cpu) }}" method="post">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-header">
                        <h4>Form Edit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col">
                                <label>ID cpu</label>
                                <input type="text" class="form-control" name="id_cpu" value="{{ $data->id_cpu }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>PIC</label>
                                <select class="form-control select2" name="pic_id" id="pic_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($pic as $pics)
                                        <option value="{{ $pics->id }}"
                                            @if ($pics->id == $detail->pic_id) selected @endif>
                                            {{ $pics->nama_pic }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Nama Komputer</label>
                                <input type="text" class="form-control" name="hostname" value="{{ $data->hostname }}">
                            </div>
                            <div class="form-group col">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="{{ $data->kategori }}">
                            </div>
                            <div class="form-group col">
                                <label>Serial Number</label>
                                <input type="text" class="form-control" name="serial_number"
                                    value="{{ $data->serial_number }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>OS</label>
                                <input type="text" class="form-control" name="os" value="{{ $data->os }}">
                            </div>
                            <div class="form-group col">
                                <label>Processor</label>
                                <input type="text" class="form-control" name="processor" value="{{ $data->processor }}">
                            </div>
                            <div class="form-group col">
                                <label>Mainboard</label>
                                <input type="text" class="form-control" name="mainboard" value="{{ $data->mainboard }}">
                            </div>
                            <div class="form-group col">
                                <label>RAM</label>
                                <input type="text" class="form-control" name="ram" value="{{ $data->ram }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>ROM</label>
                                <input type="text" class="form-control" name="rom" value="{{ $data->rom }}">
                            </div>
                            <div class="form-group col">
                                <label>VGA</label>
                                <input type="text" class="form-control" name="vga" value="{{ $data->vga }}">
                            </div>
                            <div class="form-group col">
                                <label>Soundcard</label>
                                <input type="text" class="form-control" name="soundcard" value="{{ $data->soundcard }}">
                            </div>
                            <div class="form-group col">
                                <label>CDRom</label>
                                <input type="text" class="form-control" name="cdroom" value="{{ $data->cdroom }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>NIC</label>
                                <input type="text" class="form-control" name="nic" value="{{ $data->nic }}">
                            </div>
                            <div class="form-group col">
                                <label>MAC</label>
                                <input type="text" class="form-control" name="mac" value="{{ $data->mac }}">
                            </div>
                            <div class="form-group col">
                                <label>Casing</label>
                                <input type="text" class="form-control" name="casing" value="{{ $data->casing }}">
                            </div>
                            <div class="form-group col">
                                <label>Admin</label>
                                <select class="form-control select2" name="admin" id="admin">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($admin as $admins)
                                        <option value="{{ $admins->id }}"
                                            @if ($admins->id == $admins->id) selected @endif>{{ $admins->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Merk Cpu</label>
                                <input type="text" class="form-control" name="merk_id" value="{{ $data->merk_id }}"
                                    hidden>
                                <p class="form-control" @readonly(true)>{{ $data->Merk->keterangan }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Vendor</label>
                                <select class="form-control select2" name="vendor_id" id="vendor_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($vendor as $vendors)
                                        <option value="{{ $vendors->id }}"
                                            @if ($vendors->id == $detail->vendor_id) selected @endif>{{ $vendors->perusahaan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Software</label>
                                <select class="form-control select2" name="software_id" id="software_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($software as $softwares)
                                        <option value="{{ $softwares->id }}"
                                            @if ($softwares->id == $detail->software_id) selected @endif>
                                            {{ $softwares->nama_software }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Pilih Status</label>
                                <select class="form-control select2" name="status_id" id="status_id">
                                    <option value="">Pilih Dulu</option>
                                    @foreach ($status as $statuses)
                                        <option value="{{ $statuses->id }}"
                                            @if ($statuses->id == $cpus->status_id) selected @endif>{{ $statuses->status }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Workstation</label>
                                <select class="form-control select2" name="workstation_id" id="workstation_id">
                                    <option value="0">-</option>
                                    @foreach ($workstation as $workstations)
                                        <option value="{{ $workstations->id }}"
                                            @if ($workstations->id == $detail->workstation_id) selected @endif>
                                            {{ $workstations->no_ip_address }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col">
                                <label>Tanggal Input</label>
                                <input type="date" class="form-control" name="tanggal_input" id="tanggal_input"
                                    value="{{ $data->tanggal_input }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="Keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" style="height: 100%" name="keterangan" id="keterangan">{{ $data->keterangan }}</textarea>
                            </div>
                            <div class="form-group col" hidden>
                                <label>Jenis Perangkat</label>
                                <input type="text" class="form-control" name="jenisperangkat_id"
                                    value="{{ $data->jenisperangkat_id }}" hidden>
                                <p class="form-control" @readonly(true)>{{ $data->JenisPerangkat->keterangan }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit" id="submit">Edit</button>
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


    {{-- <script>
        let id_perangkat = ''
        let nama_perangkat = ''
        let tgl_input = ''

        const InputIdEl = document.querySelector('#id_cpu')
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

        let sumDevices = @json($cpus);
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
