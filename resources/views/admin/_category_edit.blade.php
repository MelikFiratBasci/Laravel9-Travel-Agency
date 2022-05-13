@extends('layouts.admin')
@section('title','edit category')
@section('content')
    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category edit form</h4>
                <form class="forms-sample" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="parent">Parent</label>
                        <select class="form-control" name="parent_id">
                            <option value="0">Main Category</option>
                            @foreach($datalist as $rs)
                            <option value="{{ $rs->id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>{{ $rs->title}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords"
                               value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description"
                               placeholder="description" value="{{$data->description}}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="slug"
                               value="{{$data->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status" >
                            <option selected="selected">{{$data->status}}</option>
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

                    <button type="submit" class="btn btn-primary mr-2">edit category</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
