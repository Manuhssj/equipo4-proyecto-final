<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->

                    @include('layouts.bread')

                    <!-- end page title -->

                    @yield('contenido')

                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        @include('layouts.scripts')
    </div>
</body>

@include('layouts.footer')

</html>