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
                        <table class="table-striped table-md table" id="tablesearch">
                            <thead>
                                <tr>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama PIC</th>
                                    <th>Status</th>
                                    <th>Hostname</th>
                                    <th>IP Address</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $type => $details)
                                    @foreach ($details as $hehe)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($type == 'keyboard')
                                                    {{ $hehe->keyboard->id_keyboard }}
                                                @elseif ($type == 'cpu')
                                                    {{ $hehe->cpu->id_cpu }}
                                                @elseif ($type == 'monitor')
                                                    {{ $hehe->monitor->id_monitor }}
                                                @elseif ($type == 'mouse')
                                                    {{ $hehe->mouse->id_mouse }}
                                                @elseif ($type == 'speaker')
                                                    {{ $hehe->speaker->id_speaker }}
                                                @elseif ($type == 'printer')
                                                    {{ $hehe->printer->id_printer }}
                                                @elseif ($type == 'network')
                                                    {{ $hehe->network->id_network }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>{{ $hehe->pic->nama_pic }}</td>
                                            <td>{{ $hehe->status }}</td>
                                            {{-- @empty($hehe->workstation->hostname)
                                                <td>N/A</td>
                                            @else
                                                <td>{{ $hehe->workstation->hostname }}</td>
                                            @endempty --}}
                                            {{-- @empty($hehe->workstation->no_ip_address)
                                                <td>N/A</td>
                                            @else
                                                <td>{{ $hehe->workstation->no_ip_address }}</td>
                                            @endempty --}}
                                            <td>{{ optional($hehe->workstation)->hostname ?? 'N/A' }}</td>
                                            <td>{{ optional($hehe->workstation)->no_ip_address ?? 'N/A' }}</td>
                                            <td>{{ $hehe->tanggal_input }}</td>
                                            <td>
                                                <a href="/detail-pic/{{ $hehe->pic->id }}" class="btn btn-info">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <!-- Page Specific JS File -->
    <script>
        $(document).ready(function() {
            $('#tablesearch').DataTable({
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
