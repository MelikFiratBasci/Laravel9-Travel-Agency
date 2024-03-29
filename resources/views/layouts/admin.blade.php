<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png" />
    @yield('css')
    @yield('javascript')
</head>
<body>
<div class="container-scroller">
    @include('admin._header')
    <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('admin._settings')
            @include('admin._rightSidebar')
            @include('admin._sidebar')
            @yield('content')
            @yield('footer')
        </div>
</div>

</body>
</html>
