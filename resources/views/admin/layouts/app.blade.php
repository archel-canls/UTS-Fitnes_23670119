<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('landing.layouts.head')
</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- Header -->
        @include('admin.layouts.header')

        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content Start -->
        @yield('content')
        <!-- Main Content End -->

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->

        <!-- Footer Start -->
        @include('landing.layouts.footer')
        <!-- Footer End -->
    </div>
    <!-- END #app -->

    <!-- JS Scripts -->
    @include('landing.layouts.script')
</body>

</html>