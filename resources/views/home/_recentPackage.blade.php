<!-- Recent Product Start -->
<div class="recent-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Recent packages</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-3">
            @foreach($last as $rs)
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="{{route('package',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="{{route('package',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 200px"
                                     alt="">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="{{route('package',['id'=>$rs->id,'slug'=>$rs->slug])}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span>{{$rs->price}}</h3>
                          
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Recent Product End -->
