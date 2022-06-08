@foreach($children as $subcategory)
    <div class="dropdown-item">


        <div class="collapse" id="subcategories">
            @if(count($subcategory->children))
                <a class="dropdown-item">{{$subcategory->title}}</a>
                <a class="dropdown-item">
                    @include('home.categorytree',['children'=>$subcategory->children])
                </a>


            @else
                <a class="dropdown-item" href="{{route('categorypackages',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>

            @endif

        </div>
    </div>
@endforeach

