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
                                                <a href="/pic/detail-pic/{{ $hehe->pic->id }}"
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
