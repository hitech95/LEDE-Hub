<ul class="metismenu nav nav-pills nav-stacked" id="menu">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-dashboard"></i>Dashboard<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin') }}" class="nav-link">Dashboard</a></li>
            <li><a href="{{ url('/admin/stats') }}" class="nav-link">Stats</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-user"></i>Users<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/users') }}" class="nav-link">Users</a></li>
            <li><a href="{{ url('/admin/users/create') }}" class="nav-link">New User</a></li>
            <li><a href="{{ url('/admin/permissions') }}" class="nav-link">Permissions</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-gear"></i>Hardware<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/hardware/devices') }}" class="nav-link">Devices</a></li>
            <li><a href="{{ url('/admin/hardware/platforms') }}" class="nav-link">Platforms</a></li>
            <li><a href="{{ url('/admin/hardware/create') }}" class="nav-link">New Hardware</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-building"></i>Brands<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/brands/') }}" class="nav-link">Brands</a></li>
            <li><a href="{{ url('/admin/brands/create') }}" class="nav-link">New Brand</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-bar-chart"></i>Specifications<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/specs/') }}" class="nav-link">Specifications</a></li>
            <li><a href="{{ url('/admin/specs/create') }}" class="nav-link">New Specifications</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-paper-plane"></i>Releases<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="#" class="nav-link">Releases</a></li>
            <li><a href="#" class="nav-link">New Release</a></li>
        </ul>
    </li>
    <li class="nav-item last">
        <a href="#" class="nav-link">
            <i class="fa fa-tags"></i>Tags<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/tags') }}" class="nav-link">Tags</a></li>
            <li><a href="{{ url('/admin/tags/create') }}" class="nav-link">New Tag</a></li>
        </ul>
    </li>
</ul>