<div class="col-md-3 col-12 bg-dark text-white sidebar">
    <h2 class="text-center py-3 d-none d-md-block">Admin Dashboard</h2>
    <h2 class="text-center py-3 d-md-none">Dashboard</h2>
    <ul class="nav flex-column">
        <li class="nav-item border-bottom border-light">
            <a class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}" href="#">Dashboard</a>
        </li>
        <li class="nav-item border-bottom border-light">
            <a class="nav-link text-white {{ request()->routeIs('vehicle.index') ? 'active' : '' }}" href="{{ route('vehicle.index') }}">Vehicles</a>
        </li>
        <li class="nav-item border-bottom border-light">
            <a class="nav-link text-white {{ request()->is('analytics') ? 'active' : '' }}" href="#">Analytics</a>
        </li>
        <li class="nav-item border-bottom border-light">
            <a class="nav-link text-white {{ request()->is('settings') ? 'active' : '' }}" href="#">Settings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ request()->is('logout') ? 'active' : '' }}" href="#">Logout</a>
        </li>
    </ul>
</div>
