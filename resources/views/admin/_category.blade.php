@extends('layouts.admin')
@section('title','Admin Panel Category List')
@section('keywords','otel,gezi,sinirsiz eglence')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category List</h4>
                            <p class="card-description">

                                <label style="width: 200px"
                                       class="badge badge-outline-primary">
                                    <a href="{{route('admin_category_add')}}"
                                       class="nav-link">Ekle</a></label>

                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>title</th>
                                        <th>Status</th>
                                        <th>Parent</th>
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
                                                <p>{{$rs->title}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->status}}</p>
                                            </td>
                                            <td>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </td>
                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="{{route('admin_category_edit',['id'=>$rs->id])}}"
                                                       class="nav-link">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="{{route('admin_category_delete',['id'=>$rs->id])}}"
                                                                                     onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('admin._footer')
@endsection
