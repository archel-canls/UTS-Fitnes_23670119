<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('landing.layouts.head')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Header / Navbar Start -->
    @include('landing.layouts.header')
    <!-- Header / Navbar End -->

    <!-- Main Content Start -->
    @yield('content')
    <!-- Main Content End -->

    <!-- Footer Start -->
    @include('landing.layouts.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right
                        reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-body">
                    Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a href="https://themewagon.com/">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <div class="back-to-top">
        <a href="#" class="btn"><i class="fa fa-arrow-up"></i></a>
    </div>

    <!-- JS Scripts -->
    @include('landing.layouts.script')
</body>

</html>