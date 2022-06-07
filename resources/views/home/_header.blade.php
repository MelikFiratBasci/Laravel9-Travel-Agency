<!-- Nav Bar Start -->

<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href={{route("home")}} class="nav-item nav-link active">Home</a>
                    <a href="product-list.html" class="nav-item nav-link">Products</a>
                    <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                    <a href="cart.html" class="nav-item nav-link">Cart</a>
                    <a href="checkout.html" class="nav-item nav-link">Checkout</a>
                    <a href="my-account.html" class="nav-item nav-link">My Account</a>
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu">
                                <a href="{{route('home')}}" class="dropdown-item">campaigns</a>
                                <a href="{{route('home')}}" class="dropdown-item">newproducts</a>
                                <a href="{{route('references')}}" class="dropdown-item">references</a>
                                <a href="{{route('faq')}}" class="dropdown-item">faq</a>
                                <a href="{{route('contact')}}" class="dropdown-item">contact</a>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            @auth
                                <strong><a href="{{route('myprofile')}}" class="dropdown-item">{{Auth::user()->name}}</a></strong>
                                <br>

                                <a href="{{route('logout')}}" class="dropdown-item">logout</a>
                            @endauth
                            @guest
                                <a href="/login" class="dropdown-item">Login</a>
                                <a href="/register" class="dropdown-item">Register</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->


<!-- Bottom Bar Start -->

<!-- Bottom Bar End -->

