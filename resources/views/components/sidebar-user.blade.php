<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Inventory Asset IT</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">IAIT</a>
        </div>
        <ul class="sidebar-menu">
            <li class='{{ Request::is('dashboard-user') ? 'active' : '' }}'>
                <a href="{{ url('dashboard-user') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class='{{ Request::is('inventory-asset-user') ? 'active' : '' }}'>
                <a href="{{ url('inventory-asset-user') }}"><i class="fas fa-warehouse"></i>
                    <span>Inventory Asset</span>
                </a>
            </li>
            <li class='{{ Request::is('pic-user') ? 'active' : '' }}'>
                <a href="{{ url('pic-user') }}"><i class="fas fa-person"></i>
                    <span>PIC</span>
                </a>
            </li>
            <li class="{{ Request::is('credits') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('credits') }}"><i class="fas fa-pencil-ruler">
                    </i> <span>Credits</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
