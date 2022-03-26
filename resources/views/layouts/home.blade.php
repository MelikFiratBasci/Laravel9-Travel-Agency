<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">
    <meta name="description" content=@yield('title')>
    <meta name="keywords" content=@yield('title')>
    <meta name="author" content="firat basci">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link type ="text/css" rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css"/>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
@include('home._navigation')
@include('home._header')
<div id="navigation">
    <div class ="container">
        <div id="responsive-nav">
@include('home._category')

        </div>
    </div>
</div>
@section('content')
@show
    @include('home._footer')
</body>
</html>
