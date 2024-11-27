<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
<div class="col-md-3 col-12 text-white sidebar" style="background-color: #a0aec0">
    <h3 class="text-center py-3 d-none d-md-block">Admin Dashboard</h3>
    <h2 class="text-center py-3 d-md-none">Dashboard</h2>
    <ul class="nav flex-column">
        <li class="nav-item border-bottom border-light mb-2 mt-2">
            <a class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-card-list" style="margin-right: 4px"></i>
                Dashboard</a>
        </li>
        <li class="nav-item border-bottom border-light mb-2 mt-2">
            <a class="nav-link text-white {{ request()->routeIs('vehicle.index') ? 'active' : '' }}" href="{{ route('vehicle.index') }}">
                <i class="bi bi-car-front-fill" style="margin-right: 4px"></i>
                Vehicles</a>
        </li>
        <li class="nav-item border-bottom border-light mb-2 mt-2">
            <a class="nav-link text-white {{ request()->is('analytics') ? 'active' : '' }}" href="#">
                <i class="bi bi-clipboard-data-fill" style="margin-right: 4px"></i>
                Analytics</a>
        </li>
        <li class="nav-item border-bottom border-light mb-2 mt-2">
            <a class="nav-link text-white {{ request()->is('mechanics') ? 'active' : '' }}" href="#">
                <i class="bi bi-people-fill " style="margin-right: 4px"></i>
                Mechanics</a>
        </li>
        <li class="nav-item border-bottom border-light mb-2 mt-2">
            <a class="nav-link text-white {{ request()->is('settings') ? 'active' : '' }}" href="#">
                <i class="bi bi-gear-fill" style="margin-right: 4px"></i>
                Settings</a>
        </li>
        <li class="nav-item mb-2 mt-2">
            <a class="nav-link text-white {{ request()->is('logout') ? 'active' : '' }}" href="#">
                <i class="bi bi-box-arrow-left" style="margin-right: 4px"></i>
                Logout</a>
        </li>
    </ul>
</div>
