<div class="header">
    <!--Container -->
    <div class="container-fluid">
        <div class="row">
            <!--MainSlider -->
            <div class="col-md-9">
                <div class="header-slider normal-slider">
                    @foreach($slider as $rs)
                    <div class="header-slider-item">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" syle="height 400px" alt="Slider Image"/>
                        <a class="btn" href="{{route('package',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                        <div class="header-slider-caption">
                            <p>{{$rs->title}}</p>
                           <i class="fa fa-shopping-cart"></i>{{$rs->price}}
                        </div>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-1.jpg"/>
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets')}}/img/category-2.jpg"/>
                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->
