<ul class="metisMenu" id="menu">
    <li>
        <a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        <ul>
            <li><a href="{{ url('/admin/stats') }}"><i class="fa fa-area-chart"></i>Stats</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ url('/admin/users') }}"><i class="fa fa-user"></i> Users</a>
        <ul>
            <li><a href="{{ url('/admin/users/create') }}"><i class="fa fa-plus"></i>New User</a></li>
            <li><a href="{{ url('/admin/permissions') }}"><i class="fa fa-get-pocket"></i>Permissions</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ url('/admin/hardware') }}"><i class="fa fa-gear"></i> Hardware</a>
        <ul>
            <li><a href="{{ url('/admin/hardware/create') }}"><i class="fa fa-plus"></i>New Hardware</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fa fa-paper-plane"></i> Releases</a>
        <ul>
            <li><a href="#"><i class="fa fa-plus"></i>New Release</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ url('/admin/tags') }}"><i class="fa fa-tags"></i> Tag</a>
        <ul>
            <li><a href="{{ url('/admin/tags/create') }}"><i class="fa fa-plus"></i>New Tag</a></li>
        </ul>
    </li>
</ul>