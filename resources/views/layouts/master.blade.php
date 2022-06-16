<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title ?? '' }} - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css">

    @stack('css')
</head>

<body class=""
      data-layout-config="{&quot;leftSideBarTheme&quot;:&quot;dark&quot;,&quot;layoutBoxed&quot;:false, &quot;leftSidebarCondensed&quot;:false, &quot;leftSidebarScrollable&quot;:false,&quot;darkMode&quot;:false, &quot;showRightSidebarOnStart&quot;: true}"
      data-leftbar-theme="dark">
<!-- Begin page -->
<div class="wrapper mm-active">
    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('layouts.topbar')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">{{ $title ?? '' }}</h4>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- bundle -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/helper.js') }}"></script>
@stack('js')

</body>
</html>
