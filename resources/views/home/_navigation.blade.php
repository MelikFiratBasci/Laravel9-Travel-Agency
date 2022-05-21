@php
    $parentCategories =\App\Http\Controllers\HomeController::categoryList();
@endphp
<nav class="navbar bg-light">
    <ul class="navbar-nav">

        <li class="nav-item" style="color: #112e33;font-family: 'Arial Black'">
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="true" aria-controls="categories">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categories">

                @foreach($parentCategories as $rs)
                    <ul  class="dropdown side-dropdown">
                        <a class="nav-link" data-target="#subcategories" data-toggle="collapse" href="subcategories" aria-expanded="true" aria-controls="subcategories">{{$rs->title}}<i class="fa fa-angle-right"></i></a>
                        <div  class="row" >
                            <div>
                                @if(count($rs->children))
                                    @include('home.categorytree',['children'=>$rs->children])
                                @endif
                            </div>
                        </div>
                    </ul>
                @endforeach

            </div>
        </li>

</nav>



