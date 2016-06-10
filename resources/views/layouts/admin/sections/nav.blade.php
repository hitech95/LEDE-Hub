<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse"
            data-target="#collapsingNavbar">
        &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://www.lede-project.org/logo/logo_small.png">LEDE Hub</a>
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/release') }}">Releases</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">Hardware</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/device') }}">Table of hardware</a>
                    <a class="dropdown-item" href="{{ url('/platform') }}">Platforms</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/report">Reports</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/staff') }}">Staff</a></li>
            @if (Auth::guest())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">Login</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                        <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                    </div>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">{{ Auth::user()->nickname }}</a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                    </div>
                </li>
            @endif
        </ul>
    </div>
</nav>
<!--/.nav-->