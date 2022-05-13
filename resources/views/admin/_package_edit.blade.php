@extends('layouts.admin')
@section('title','edit package')
@section('keywords','otel,gezi,sinirsiz eglence')
@section('content')
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">package edit form</h4>
                <form class="forms-sample" action="{{route('admin_package_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">category</label>
                        <select class="form-control" name="category_id">
                            @foreach($datalist as $rs)
                                <option value="{{ $rs->id}}"
                                        @if($rs->id == $data->category_id) selected="selected" @endif>{{ $rs->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords"
                               value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description"
                               placeholder="description"
                               value="{{$data->description}}">
                    </div>
                    <div class="form-group">
                        <label for="detail">detail</label>
                        <input type="text" name="detail" class="form-control" id="detail"
                               placeholder="detail"
                               value="{{$data->detail}}">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" name="price" class="form-control" value="0" id="price"
                               placeholder="price">
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="slug" value="{{$data->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status" value="{{$data->status}}">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                   placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">edit package</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
