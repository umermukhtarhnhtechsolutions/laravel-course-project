<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin_or_seller/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin_or_seller/assets/css/styles.min.css') }}" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('seller.layout.sidebar')
        <div class="body-wrapper">
            @include('seller.layout.header')
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('admin_or_seller/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('admin_or_seller/assets/js/dashboard.js') }}"></script>
</body>

</html>
