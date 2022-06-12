@extends('layouts.home')
@section('title',$data->title)
@section('description')
    {{$data->description}}
@endsection
@section('keywords',$data->keywords)
@section('content')
    <!-- Product Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-9">
                                <div class="product-slider-single normal-slider">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"
                                         style="height: 400px"
                                         alt="">
                                    @foreach($datalist as $rs)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                             style="height: 200px"
                                             alt="">
                                    @endforeach

                                </div>
                                <div class="product-slider-single-nav normal-slider">
                                    @foreach($datalist as $rs)


                                        <div class="slider-nav-img">
                                            <img
                                                src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                                style="height: 200px"
                                                alt="">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-content">
                                    @include('home.messages')
                                    <div class="title"><h2>{{$data->title}}</h2></div>
                                    <div class="ratting">

                                        <h7>({{$reviews->count()}})<i
                                                class="@if($avg<1) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                            <i class="@if($avg<2) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                            <i class="@if($avg<3) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                            <i class="@if($avg<4) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                            <i class="@if($avg<5) fa fa-star-o empty @else fa fa-star  @endif"></i></h7>
                                    </div>
                                    <div class="price">
                                        <h4>Price:</h4>
                                        <p>{{$data->price}} <span>{{$data->price+50}}</span></p>
                                    </div>
                                    <form action="{{route('user_reservation_add',['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <div>

                                            <label for="start_date">Start Date:</label>
                                            <input type="date" id="start_date" name="start_date"><br/>
                                            <label for="end_date">end Date:</label>
                                            <input type="date" id="end_date" name="end_date">

                                        </div>
                                        <div class="qty">

                                            <input type="text" id="person" name="person" value="1">

                                        </div>
                                        <!--<div class="p-size">
                                            <h4>Size:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">S</button>
                                                <button type="button" class="btn">M</button>
                                                <button type="button" class="btn">L</button>
                                                <button type="button" class="btn">XL</button>
                                            </div>
                                        </div>
                                        <div class="p-color">
                                            <h4>Color:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">White</button>
                                                <button type="button" class="btn">Black</button>
                                                <button type="button" class="btn">Blue</button>
                                            </div>
                                        </div>
                                        -->

                                        <div class="action">
                                            <button type="submit" class="primary-btn add-to-cart"><i
                                                    class="fa fa-shopping-cart">Book Now</i>
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews({{$reviews->count()}}
                                        )</a>
                                </li>
                            </ul>


                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    <h1>
                                        <p>
                                            {!! $data->detail !!}
                                        </p>
                                    </h1>
                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <h4>Product specification</h4>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>


                                <div id="reviews" class="container tab-pane fade">
                                    <div class="reviews-submitted">
                                        @foreach($reviews as $rs)
                                            <div class="reviewer">{{$rs->user->name}} - <span>{{$rs->created_at}}</span>
                                            </div>
                                            <div class="ratting">
                                                <i class="@if($rs->rate<1) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                                <i class="@if($rs->rate<2) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                                <i class="@if($rs->rate<3) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                                <i class="@if($rs->rate<4) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                                <i class="@if($rs->rate<5) fa fa-star-o empty @else fa fa-star  @endif"></i>
                                            </div>
                                            <strong>{{$rs->subject}}</strong>
                                            <p>
                                                {{$rs->review}}
                                            </p>
                                        @endforeach
                                    </div>


                                    <form class="reviews-submit" action="{{route('storecomment')}}" method="post">
                                        @csrf
                                        <h4>Give your Review:</h4>
                                        <div class="ratting">
                                            <i class="far fa-star">
                                                <input type="radio" id="star5" name="rate" value="5"
                                                >
                                            </i>
                                            <i class="far fa-star"> <input type="radio" id="star4" name="rate"
                                                                           value="4"
                                                ></i>
                                            <i class="far fa-star"> <input type="radio" id="star3" name="rate"
                                                                           value="3"
                                                ></i>
                                            <i class="far fa-star"> <input type="radio" id="star2" name="rate"
                                                                           value="2"
                                                ></i>
                                            <i class="far fa-star"> <input type="radio" id="star1" name="rate"
                                                                           value="1"
                                                ></i>
                                        </div>
                                        <div class="row form">
                                            <input class="input" type="hidden" placeholder="package_id"
                                                   name="package_id"
                                                   value="{{$data->id}}">
                                            <input class="input" type="hidden" placeholder="slug" name="slug"
                                                   value="{{$data->slug}}">
                                            <div class="col-sm-6">
                                                <input class="input" type="text" placeholder="subject"
                                                       name="subject">
                                            </div>

                                            <div class="col-sm-12">
                                                    <textarea class="input" name="review"
                                                              placeholder="Review"></textarea>
                                            </div>
                                            @auth()
                                                <div class="col-sm-12">
                                                    <button>Submit</button>
                                                </div>
                                            @endauth
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product">
                        <div class="section-header">
                            <h1>Related Products</h1>
                        </div>

                        <div class="row align-items-center product-slider product-slider-3">
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-6.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-4.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-2.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Product Detail End -->

@endsection
