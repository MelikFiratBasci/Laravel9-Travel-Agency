@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>{{$setting->adress}}</p>
                        <p><i class="fa fa-envelope"></i>{{$setting->email}}</p>
                        <p><i class="fa fa-phone"></i>{{$setting->phone}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                            @if($setting->facebook!=null)<a href="{{$setting->facebook}} " target=_blank"><i
                                    class="fab fa-facebook-f"></i></a>@endif
                            @if($setting->twitter!=null)<a href="{{$setting->twitter}}" target="_blank"><i
                                    class="fab fa-twitter"></i></a>@endif
                            @if($setting->instagram!=null)<a href="{{$setting->instagram}}" target="_blank"><i
                                    class="fab fa-instagram"></i></a>@endif
                            @if($setting->youtube!=null)<a href="{{$setting->youtube}}" target="_blank"><i
                                    class="fab fa-youtube"></i></a>@endif

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <img src="{{asset('assets')}}/img/payment-method.png" alt="Payment Method"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="{{asset('assets')}}/img/godaddy.svg" alt="Payment Security"/>
                    <img src="{{asset('assets')}}/img/norton.svg" alt="Payment Security"/>
                    <img src="{{asset('assets')}}/img/ssl.svg" alt="Payment Security"/>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; {{$setting->company}} All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>{{$setting->company}}</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('assets')}}/js/main.js"></script>
