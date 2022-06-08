@extends('layouts.admin')
@section('title','Admin Panel message List')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">message List</h4>
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
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>subject</th>
                                        <th>Message</th>
                                        <th>Ip</th>
                                        <th>note</th>
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
                                                <p>{{$rs->name}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->email}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->phone}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->subject}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->message}}</p>
                                            </td>

                                            <td>
                                                <p>{{$rs->ip}}</p>
                                            </td>
                                            <td>
                                                <p>{{$rs->note}}</p>
                                            </td>

                                            <td>
                                                <label class="badge badge-warning badge-outline-danger">
                                                    <a href="{{route('admin_message_edit',['id'=>$rs->id])}}"
                                                       class="nav-link" onclick="return !window.open(this.href,'','','top=50 left 100 width 1100 height=700')">edit</a></label>
                                            </td>
                                            <td>
                                                <label class="badge badge-danger"><a class="nav-link"
                                                                                     href="{{route('admin_message_delete',['id'=>$rs->id])}}"
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
