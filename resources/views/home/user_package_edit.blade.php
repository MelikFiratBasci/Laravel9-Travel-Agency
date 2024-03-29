@extends('layouts.home')
@section('title','package edit')

@section('headerjs')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endSection
@section('content')

    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">package edit form</h4>
                <form class="forms-sample" action="{{route('user_package_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">category</label>
                        <select class="form-control" name="category_id">
                            @foreach($datalist as $rs)
                                <option value="{{ $rs->id}}" @if($rs->id = $data->parent_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title"
                               value="{{$data->title}}">
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
                        <label>detail</label>
                        <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                        <script>
                            $(document).ready(function() {
                                $('#detail').summernote();
                            });
                        </script>


                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" name="price" class="form-control" value="0" id="price"
                               placeholder="price">
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" placeholder="slug"
                               value="{{$data->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status" value="{{$data->status}}">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image"  class="form-control">
                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}" height="100" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">edit package</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
