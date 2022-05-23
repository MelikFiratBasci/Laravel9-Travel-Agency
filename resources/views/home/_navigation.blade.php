@php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
@endphp


        <div class="sidebar navbar-expand-sm bg-dark navbar-dark">
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mdi-page-layout-sidebar-left">
                    <div class="nav-item dropdown">
                        <div class="navbar-nav ml-auto">

                            <div class="d-menu ">
                                <ul>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                                    <ul class="nav-item dropdown-menu  ">
                                        @foreach($parentCategories as $rs)
                                            <ul class="dropdown side-dropdown">
                                                <a class="dropdown-item" data-target="#subcategories" data-toggle="collapse"
                                                   href="subcategories"
                                                   aria-expanded="true" aria-controls="subcategories">{{$rs->title}}<i
                                                        class="fa fa-angle-right"></i></a>
                                                <ul class="row">
                                                    <ul class="dropdown side-dropdown">
                                                        @if(count($rs->children))
                                                            @include('home.categorytree',['children'=>$rs->children])
                                                        @endif
                                                    </ul>
                                                </ul>
                                            </ul>
                                        @endforeach

                                    </div>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>

