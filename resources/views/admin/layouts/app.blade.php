<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('admin.layouts.head')
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
        @include('admin.layouts.footer')
        <!-- Footer End -->
    </div>
    <!-- END #app -->

    <!-- JS Scripts -->
    @include('admin.layouts.script')
</body>

</html>