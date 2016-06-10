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
            <li><a href="{{ url('/admin/hardware') }}" class="nav-link">Hardware</a></li>
            <li><a href="{{ url('/admin/hardware/create') }}" class="nav-link">New Hardware</a></li>
            <li><a href="{{ url('/admin/brand/') }}" class="nav-link">Brand</a></li>
            <li><a href="{{ url('/admin/brand/create') }}" class="nav-link">New Brand</a></li>
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
            <i class="fa fa-tags"></i>Tag<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/tags') }}" class="nav-link">Tag</a></li>
            <li><a href="{{ url('/admin/tags/create') }}" class="nav-link">New Tag</a></li>
        </ul>
    </li>
</ul>