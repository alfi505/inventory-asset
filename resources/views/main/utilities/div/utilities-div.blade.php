@extends('layouts.app')

@section('title', 'Divisi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush

@section('main')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Divisi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{ url('/dashboard-admin') }}">Dashboard</a></div>
                    <div class="breadcrumb-item active" aria-current="page">Divisi</div>
                </div>
            </div>

            @csrf
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-person"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Divisi</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalCount }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Divisi</h4>
                            <div class="card-header-form">
                                <div class="row">
                                    <div class="col">
                                        <a href="/utilities-div/create" class="btn btn-primary">Tambah Divisi</a>
                                    </div>
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table" id="div">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th style="width: 30%">Divisi</th>
                                            <th style="width: 30%">Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($divisi as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->divisi }}</td>
                                                <td>{{ $data->keterangan }}</td>
                                                <td>
                                                    <form method="POST" onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                        action="{{ route('utilities-div.destroy', $data->id) }}">
                                                        <a href="/utilities-div/edit-div/{{ $data->id }}"
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
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#div').DataTable({
                searching: false, // Disable searching
                paging: false, // Hide Pagination
                info: false, // Hide information
                lengthChange: false, // Hide entries per page
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
@endpush
