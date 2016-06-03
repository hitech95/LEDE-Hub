@include('layouts.sections.header')

@include('layouts.sections.nav')

@yield('content-header')

<div class="container-fluid">
    @yield('content')

    @include('layouts.sections.copyright')
</div>
<!--/.container-fluid-->

@include('layouts.sections.footer')