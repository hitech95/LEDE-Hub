<ul class="metismenu nav nav-pills nav-stacked" id="menu">
    <li class="nav-item">
        <a href="{{ url('/admin') }}" class="nav-link">
            <i class="fa fa-dashboard"></i>Dashboard<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/stats') }}" class="nav-link"><i class="fa fa-area-chart"></i> Stats</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ url('/admin/users') }}" class="nav-link">
            <i class="fa fa-user"></i>Users<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/users/create') }}" class="nav-link"><i class="fa fa-plus"></i> New User</a></li>
            <li><a href="{{ url('/admin/permissions') }}" class="nav-link"><i class="fa fa-get-pocket"></i> Permissions</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ url('/admin/hardware') }}" class="nav-link">
            <i class="fa fa-gear"></i>Hardware<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/hardware/create') }}" class="nav-link"><i class="fa fa-plus"></i> New Hardware</a></li>
            <li><a href="{{ url('/admin/brand/') }}" class="nav-link"><i class="fa fa-building"></i> Brand</a></li>
            <li><a href="{{ url('/admin/brand/create') }}" class="nav-link"><i class="fa fa-plus"></i> New Brand</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fa fa-paper-plane"></i>Releases<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="#" class="nav-link"><i class="fa fa-plus"></i> New Release</a></li>
        </ul>
    </li>
    <li class="nav-item last">
        <a href="{{ url('/admin/tags') }}" class="nav-link">
            <i class="fa fa-tags"></i>Tag<span class="arrow fa fa-angle-left"></span>
        </a>
        <ul class="nav">
            <li><a href="{{ url('/admin/tags/create') }}" class="nav-link"><i class="fa fa-plus"></i> New Tag</a></li>
        </ul>
    </li>
</ul>