<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/dashboard-admin">Inventory Asset IT</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/dashboard-admin">IAIT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ $slug == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('dashboard-admin') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class='{{ $slug == 'inventory' ? 'active' : '' }}'>
                <a href="{{ url('inventory-asset') }}"><i class="fas fa-warehouse"></i>
                    <span>Inventory Asset</span>
                </a>
            </li>
            <li class='{{ $slug == 'pic' ? 'active' : '' }}'>
                <a href="{{ url('pic') }}"><i class="fas fa-person"></i>
                    <span>PIC</span>
                </a>
            </li>
            <li class='{{ $slug == 'search' ? 'active' : '' }}'>
                <a href="{{ url('searchFilter') }}"><i class="fas fa-magnifying-glass"></i>
                    <span>PIC</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-dir') }}">Direktorat</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-div') }}">Divisi</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-unit') }}">Unit</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-vendor') }}">Vendor</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-merk') }}">Merk</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-jenisperangkat') }}">Jenis Perangkat</a>
                    </li>
                    <li class="{{ $slug == 'utilities' ? 'active' : '' }}">
                        <a href="{{ url('utilities-software') }}">Software</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
