@extends('layouts.app')

@section('title', 'Search')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Search</h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Filter</h4>
                </div>
                {{-- Bagian ikon card pertama --}}
                <div class="card-body">
                    <div class="form-group">
                        <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="CPU" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-computer mr-2"></i> CPU</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="KEYBOARD" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-regular fa-keyboard mr-2"></i> KEYBOARD</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="MONITOR" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-desktop mr-2"></i> MONITOR</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="MOUSE" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-computer-mouse mr-2"></i> MOUSE</span>
                            </label>
                        </div>
                        <div class="selectgroup w-100 mt-5">
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="JARINGAN" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-network-wired mr-2"></i> NETWORK</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="SPEAKER" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-volume-off mr-2"></i> SPEAKER</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="filter" value="PRINTER" class="selectgroup-input">
                                <span class="selectgroup-button selectgroup-button-icon"><i
                                        class="fa-solid fa-print mr-2"></i> PRINTER</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
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
                            <label>Tanggal Perolehan</label>
                            <input type="date" class="form-control" name="tanggal_input" id="tanggal_input">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12 text-center">
                        <div class="buttons">
                            <button class="btn btn-primary" type="submit" name="submit">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-body mt-5">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table-striped table-md table" id="search">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor ID</th>
                                    <th>Nama PIC</th>
                                    <th>No IP Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $hehe)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hehe->monitor->id_monitor }}</td>
                                        <td>{{ $hehe->pic->nama_pic }}</td>
                                        <td>{{ $hehe->workstation->no_ip_address }}</td>
                                        <td>

                                            <form method="POST" onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('inventory-monitor.destroy', str_replace('/', '_', $hehe->monitor->id_monitor)) }}">
                                                <a href="/inventory-monitor/detail-monitor/{{ str_replace('/', '_', $hehe->monitor->id_monitor) }}"
                                                    class="btn btn-info">Detail</a>
                                                <a href="/inventory-monitor/edit-monitor/{{ str_replace('/', '_', $hehe->monitor->id_monitor) }}"
                                                    class="btn btn-secondary">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
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
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <!-- Page Specific JS File -->
    <script>
        $(document).ready(function() {
            $('#search').DataTable({
                searching: false, // Disable searching
                paging: false, // Hide Pagination
                info: false, // Hide information
                lengthChange: false, // Hide entries per page
                order: [
                    [1, 'asc']
                ]
            });
        });
    </script>
@endpush
