@extends('layouts.home')
@section('title','Travel agency')
@section('description')
Turkiyenin en guvenilir tatil acentasi..!
@endsection
@section('keywords','otel,gezi,sinirsiz eglence')
@section('content')
    @include('home._firstSlider')
    @include('home._feature')
    @include('home._category')


    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>call us for any queries</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:0123456789">+012-345-6789</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    @include('home._popularProduct')

    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Subscribe Our Newsletter</h1>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <input type="email" value="Your email here">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    @include('home._recentProduct')
    @include('home._reference')
@endsection
