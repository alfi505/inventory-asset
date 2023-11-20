@extends('layouts.app-user')

@section('title', 'CPU')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>CPU</h1>
            </div>
            <div class="row position-relative">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-person"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>CPU</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data CPU</h4>
                            <div class="card-header-form">
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
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Nama PIC</th>
                                        <th>Nama Komputer</th>
                                        <th>Nomor IP</th>
                                        <th>ID CPU</th>
                                        <th>Unit</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Alfi</td>
                                        <td>Parangkusumo</td>
                                        <td>127.11.1.156</td>
                                        <td>MAK/IT/CPU-RKT/1105/6024</td>
                                        <td>RND</td>
                                        <td><a href="/detail-cpu-user" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Andrew</td>
                                        <td>Semen Tiga Roda</td>
                                        <td>127.11.1.160</td>
                                        <td>MAK/IT/CPU-RKT/0420/6030</td>
                                        <td>MARK</td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Budi</td>
                                        <td>Cap Badak</td>
                                        <td>127.11.1.78</td>
                                        <td>MAK/IT/CPU-RKT/1230/6044</td>
                                        <td>HRD</td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data CPU</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-striped table" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Task Name</th>
                                            <th>Progress</th>
                                            <th>Members</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>Create a mobile app</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                                    <div class="progress-bar bg-success" data-width="100%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Wildan Ahdian">
                                            </td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>Redesign homepage</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                                    <div class="progress-bar" data-width="0"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Nur Alpiana">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-3.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Hariono Yusup">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Bagus Dwi Cahya">
                                            </td>
                                            <td>2018-04-10</td>
                                            <td>
                                                <div class="badge badge-info">Todo</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>Backup database</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="70%">
                                                    <div class="progress-bar bg-warning" data-width="70%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Rizal Fakhri">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Hasan Basri">
                                            </td>
                                            <td>2018-01-29</td>
                                            <td>
                                                <div class="badge badge-warning">In Progress</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4
                                            </td>
                                            <td>Input data</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="100%">
                                                    <div class="progress-bar bg-success" data-width="100%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="{{ asset('img/avatar/avatar-2.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Rizal Fakhri">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-5.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Isnap Kiswandi">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-4.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Yudi Nawawi">
                                                <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Khaerul Anwar">
                                            </td>
                                            <td>2018-01-16</td>
                                            <td>
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
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
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
