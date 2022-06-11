@extends('layouts.admin')
@section('title','Admin Panel comment List')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">comment List</h4>
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
                                        <th>Name</th>
                                        <th>subject</th>
                                        <th>review</th>
                                        <th>rate</th>
                                        <th>Ip</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>
                                            <td>
                                                <p>{{$rs->id}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->user->name}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->subject}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->review}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->rate}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->IP}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->status}}</p>
                                            </td>


                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="{{route('admin_comment_show',['id'=>$rs->id])}}"
                                                       class="nav-link" onclick="return !window.open(this.href,'','','top=50 left 100 width 1100 height=700')">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="{{route('admin_comment_delete',['id'=>$rs->id])}}"
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
