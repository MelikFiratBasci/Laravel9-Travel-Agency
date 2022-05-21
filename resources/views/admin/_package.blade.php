@extends('layouts.admin')
@section('title','Admin Panel Package List')
@section('keywords','otel,gezi,sinirsiz eglence')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">package List</h4>
                            <p class="card-description">

                                <label style="width: 200px"
                                       class="badge badge-outline-primary">
                                    <a href="{{route('admin_package_add')}}"
                                       class="nav-link">Ekle</a></label>

                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>category</th>
                                        <th>title</th>
                                        <th>keywords</th>
                                        <th>description</th>
                                        <th>image</th>
                                        <th>Image Gallery</th>
                                        <th>detail</th>
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
                                                <p>{{$rs->category->title}}</p>
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
                                                <a href="{{route('admin_image_add',['package_id'=>$rs->id])}}"
                                                   onclick="return !window.open(this.href,'','top=50 left=100 ')">
                                                    <img src="{{asset('assets/admin/images')}}/imageGallery.jpg">
                                                </a>
                                            </td>
                                            <td>
                                                <p>{{$rs->detail}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->price}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->status}}</p>
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="{{route('admin_package_edit',['id'=>$rs->id])}}"
                                                       class="nav-link">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="{{route('admin_package_delete',['id'=>$rs->id])}}"
                                                                                     onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    @include('admin._footer')
@endsection
