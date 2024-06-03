<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>

    <base href="/public">
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="dashboard/assets/images/favicon.ico">

    <!-- jsvectormap css -->
    <link href="dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!--Swiper slider css-->
    <link href="dashboard/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="dashboard/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="dashboard/assets/css/custom.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('snippets.admin.header')


        @include('snippets.admin.sidebar')

        <!-- ============================================================== -->
        @yield('content')

    </div>
    <!-- END layout-wrapper -->




    <!-- JAVASCRIPT -->
    <script src="dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="dashboard/assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="dashboard/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="dashboard/assets/libs/jsvectormap/maps/world-merc.js"></script>

    <script src="/assets/libs/list.js/list.min.js"></script>

    <!--Swiper slider js-->
    <script src="dashboard/assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="dashboard/assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="dashboard/assets/js/app.js"></script>



    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif
    @if (Session::has('success'))
    <script>
        swal("Successful!", "{{ Session::get('success') }}!", "success");
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        swal("Error!", "{{ Session::get('error') }}!", "warning");
    </script>
    @endif
</body>

</html>
