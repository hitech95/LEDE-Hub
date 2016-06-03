<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lede Hub - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/assets/app.min.css"/>
</head>
<body>
<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse"
            data-target="#collapsingNavbar">
        ☰
    </button>
    <a class="navbar-brand" href="#">LEDE Hub</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item active">
                <a class="nav-link" href="./index.html">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Hardware</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="hardware_list.html">Table of hardware</a>
                    <a class="dropdown-item" href="#">Platforms</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Bugs</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="staff_list.html">Staff</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron bg-primary main-head">
    <div class="container-fluid">
        <div class="row">
            <h1 class=" display-3 text-xs-center">Looking for a compatible hardware?</h1>
            <p class="lead text-xs-center">
                Find a compatible hardware, browse all the available platform and choose one!<br>
                Or you want to learn more about LEDE?
            </p>
            <p class="text-xs-center">
                <a href="#" class="btn btn-secondary btn-lg">Learn More</a>
                <a href="./hardware_list.html" class="btn btn-secondary btn-lg">Find a Device</a>
            </p>
        </div>
    </div>
</div>

<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-12 main">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-inverse card-info">
                        <div class="card-block bg-info">
                            <div class="rotate">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Developers</h6>
                            <h1 class="display-1">134</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-inverse card-danger">
                        <div class="card-block bg-danger">
                            <div class="rotate">
                                <i class="fa fa-bug fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Unsupported Hardware</h6>
                            <h1 class="display-1">87</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-inverse card-success">
                        <div class="card-block bg-success">
                            <div class="rotate">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Working hardware</h6>
                            <h1 class="display-1">125</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-inverse card-warning">
                        <div class="card-block bg-warning">
                            <div class="rotate">
                                <i class="fa fa-wrench fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Supported hardware</h6>
                            <h1 class="display-1">36</h1>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="col-md-12 placeholders">
                <div class="col-xs-6 col-sm-3 placeholder text-xs-center">
                    <h4>Development</h4>
                    <span class="text-muted">Lorem ipsum dolor sit amet</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-xs-center">
                    <h4>Hardware</h4>
                    <span class="text-muted">Praesent sollicitudin felis</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-xs-center">
                    <h4>Community</h4>
                    <span class="text-muted">Curabitur nisi nunc</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder text-xs-center">
                    <h4>Platform</h4>
                    <span class="text-muted">Curabitur euismod hendrerit</span>
                </div>
            </div>
        </div>
    </div>

    <!--/row-->
    <div class="container main">
        <a id="features"></a>
        <hr>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod hendrerit tortor, eu auctor
            nulla molestie tincidunt. Praesent sollicitudin felis eget ultricies lacinia. Nulla egestas mi id
            accumsan vulputate. In ac libero risus. Curabitur nisi nunc, fermentum vel mollis et, tempor vitae nisl.
            Morbi eget libero eget dolor tempus gravida vitae at leo. Sed ac orci libero.
        </p>

        <hr>
        <div class="row">
        </div>


        <footer>
            <hr>
            <p class="text-right small">LEDE Project - Smart Hub</p>
        </footer>

    </div>
    <!--/.container-->
</div>
<!--/.container-fluid-->


<script src="/assets/app.min.js"></script>
</body>
</html>