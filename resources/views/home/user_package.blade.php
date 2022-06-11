<div class="tab-pane fade" id="package-tab" role="tabpanel" aria-labelledby="package-nav">
    <div class="table-responsive">


            <label style="width: 200px"
                   class="badge badge-outline-primary">
                <a href="{{route('user_package_add')}}"
                   class="nav-link">Ekle</a></label>


        <table class="table table-bordered">
            <thead class="thead-dark">


            <tr>
                <th>id</th>
                <th>category</th>
                <th>title</th>
                <th>keywords</th>
                <th>description</th>
                <th>image</th>
                <th>Image Gallery</th>
                <th>price</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($datalist as $rs)
                <tr>
                    <td>
                        <p>{{$rs->id}}</p>
                    </td>
                    <td>
                        <p>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                        </p>
                    </td>
                    <td>
                        <p>{{$rs->title}}</p>
                    </td>
                    <td>
                        <p>{{$rs->keywords}}</p>
                    </td>
                    <td>
                        <p>{{$rs->description}}</p>
                    </td>
                    <td>
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" height="30" ; alt="">
                        @endif
                    </td>
                    <td>
                        <a href="{{route('user_image_add',['package_id'=>$rs->id])}}"
                           onclick="return !window.open(this.href,'','top=50 left=100 ')">
                            <img src="{{asset('assets/admin/images')}}/imageGallery.jpg">
                        </a>
                    </td>

                    <td>
                        <p>{{$rs->price}}</p>
                    </td>
                    <td>
                        <p>{{$rs->status}}</p>
                    </td>
                    <td>
                        <label class="badge badge-warning badge-outline-danger">
                            <a href="{{route('user_package_edit',['id'=>$rs->id])}}"
                               class="nav-link">edit</a></label>
                    </td>
                    <td>
                        <label class="badge badge-danger"><a class="nav-link"
                                                             href="{{route('user_package_delete',['id'=>$rs->id])}}"
                                                             onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
