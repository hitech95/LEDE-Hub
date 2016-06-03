@include('layouts.sections.header')

@include('layouts.sections.nav')

@yield('content-header')

<div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">

        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            @yield('sidebar')
        </div>
        <!--/col sidebar-->

        <div class="col-md-9 col-lg-10 main">
            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas">
                    <i class="fa fa-chevron-left"></i> Menu
                </button>
            </p>
            @yield('content')
        </div>
        <!--/col content-->
    </div>
    @include('layouts.sections.copyright')
</div>
<!--/.container-fluid-->

@include('layouts.sections.footer')