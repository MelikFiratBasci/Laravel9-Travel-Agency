@extends('layouts.admin')
@section('title','Admin Panel Home Page')
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
                                Add class <code>.table</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Profile</th>
                                        <th>Category</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>category1</td>
                                        <td>12 May 2017</td>
                                        <td><label class="badge badge-warning"><a  class="nav-link" href="{{route('admin_home')}}">Open</a></label></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    @include('admin._footer')
@endsection
