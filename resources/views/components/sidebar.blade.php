<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard-admin">Inventory Asset IT</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard-admin">IAIT</a>
        </div>
        <ul class="sidebar-menu">
            <li class='{{ Request::is('dashboard-admin') ? 'active' : '' }}'>
                <a href="{{ url('dashboard-admin') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class='{{ Request::is('inventory-asset') ? 'active' : '' }}'>
                <a href="{{ url('inventory-asset') }}"><i class="fas fa-warehouse"></i>
                    <span>Inventory Asset</span>
                </a>
            </li>
            <li class='{{ Request::is('pic') ? 'active' : '' }}'>
                <a href="{{ url('pic') }}"><i class="fas fa-person"></i>
                    <span>PIC</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('utilities-dir') ? 'active' : '' }}">
                        <a href="{{ url('utilities-dir') }}">Direktorat</a>
                    </li>
                    <li class="{{ Request::is('utilities-div') ? 'active' : '' }}">
                        <a href="{{ url('utilities-div') }}">Divisi</a>
                    </li>
                    <li class="{{ Request::is('utilities-unit') ? 'active' : '' }}">
                        <a href="{{ url('utilities-unit') }}">Unit</a>
                    </li>
                    <li class="{{ Request::is('utilities-vendor') ? 'active' : '' }}">
                        <a href="{{ url('utilities-vendor') }}">Vendor</a>
                    </li>
                    <li class="{{ Request::is('utilities-merk') ? 'active' : '' }}">
                        <a href="{{ url('utilities-merk') }}">Merk</a>
                    </li>
                    <li class="{{ Request::is('utilities-jenisperangkat') ? 'active' : '' }}">
                        <a href="{{ url('utilities-jenisperangkat') }}">Jenis Perangkat</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('credits') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Credits</span>
                </a>
            </li>
        </ul>
    </aside>
</div>

<!-- Include Bootstrap JavaScript -->
{{-- <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

{{-- <script>
    // Use jQuery or plain JavaScript, depending on your project setup
    $(document).ready(function() {
        // Check for the active class and open the dropdown
        var activeClass = 'active';
        $('.dropdown-menu .{{ Request::is('utilities-dir') ? 'active' : '' }}').closest('.nav-item.dropdown')
            .addClass(activeClass);
    });
</script> --}}
