@extends('layouts.admin')
@section('title','Admin Panel Order List')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Order List</h4>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Package</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Person(s)</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>status</th>
                                        <th>note</th>
                                        <th>price</th>

                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>

                                            <td>
                                                <a href="{{route('package',['id'=>$rs->package->id,'slug'=>$rs->package->slug])}}">
                                                    <p>{{$rs->package->title}}</p>
                                                </a>
                                            </td>
                                            <td>{{$rs->user->name}}</td>
                                            <td>{{$rs->user->email}}</td>
                                            <td>{{$rs->person}}</td>

                                            <td>{{$rs->start_date}}</td>
                                            <td>{{$rs->end_date}}</td>
                                            <form class="forms-sample"
                                                  action="{{route('admin_order_update',['id'=>$rs->id])}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <td>
                                                    <select name="status" id="status">
                                                        <option value="{{$rs->status}}">{{$rs->status}}</option>
                                                        <option value="True">True</option>
                                                        <option value="Pndng">Pending</option>
                                                        <option value="Dnied">Denied</option>
                                                    </select>
                                                </td>
                                                <td class="form-group">
                                                    <textarea class="input" rows="5" name="note"
                                                              placeholder="note">{{$rs->note}}</textarea>
                                                </td>

                                                <?php
                                                $ilk = strtotime($rs->start_date);
                                                $son = strtotime($rs->end_date);

                                                $diff = ($son - $ilk) / 86400;
                                                ?>

                                                <td>{{$rs->package->price*($diff*$rs->person)}}</td>


                                                <td>
                                                    <button type="submit"
                                                            class="badge badge-warning badge-outline-primary">edit Order
                                                    </button>
                                                </td>
                                            </form>
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
