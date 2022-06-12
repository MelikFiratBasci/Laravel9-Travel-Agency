<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="{{route("home")}}">
                        <img src="{{asset('assets')}}/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form action="{{route('getpackage')}}" method="post">
                        @csrf
                        @livewire('search')
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i> </button>
                    </form>
                    @livewireScripts
                </div>
@include('home.messages')
            </div>
            <div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="{{route('user_reservation')}}" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
