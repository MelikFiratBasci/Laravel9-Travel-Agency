<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content=@yield('keywords')>
    <meta name="author" content="firat basci">

    <!-- Favicon -->
    <link href="{{asset('assets')}}/img/logo.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/slick/slick-theme.css" rel="stylesheet">
    <link type ="text/css" rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css"/>

    <!-- Template Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    @yield('css')
    @yield('headerjs')
</head>

<body>

@include('home._header')
<!-- Navigation -->
<div class="header">
    <!--Container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('home._navigation')
            </div>
            @include('home._mainSlider')
        </div>
    </div>
</div>
<!-- Main Slider End -->
@section('content')
    icerik alani
@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
