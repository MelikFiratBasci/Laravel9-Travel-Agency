@foreach($children as $subcategory)
    <ul class="list-links">


        <div class="collapse" id="subcategories">
        @if(count($subcategory->children))
            <ul >{{$subcategory->title}}</ul>
            <ul class="list-links">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>

        @else
        <ul><a href="#">{{$subcategory->title}}</a> </ul>

        @endif
        </div>
    </ul>
@endforeach
