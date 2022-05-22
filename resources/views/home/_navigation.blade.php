@php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
@endphp

    <div class="navbar-nav mr-auto">
        <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                <div class="dropdown-menu">
                    @foreach($parentCategories as $rs)
                        <ul class="dropdown side-dropdown">
                            <a class="dropdown-item" data-target="#subcategories" data-toggle="collapse" href="subcategories"
                               aria-expanded="true" aria-controls="subcategories">{{$rs->title}}<i
                                    class="fa fa-angle-right"></i></a>
                            <div class="row">
                                <div>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                </div>
                            </div>
                        </ul>
                    @endforeach

                </div>
            </div>
        </div>
    </div>




