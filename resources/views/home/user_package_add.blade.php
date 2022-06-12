@extends('layouts.home')
@section('title','package add')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endSection
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <h4 class="card-title">package add form</h4>
            </thead>
            <tbody>
            <form class="forms-sample" action="{{route('user_package_store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category">category</label>
                    <select class="form-control" name="category_id">
                        @foreach($datalist as $rs)
                            <option
                                value="{{ $rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" name="keywords" class="form-control" id="keywords" placeholder="keywords">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" id="description"
                           placeholder="description">
                </div>
                <div class="form-group">
                    <label>detail</label>
                    <textarea id="detail" name="detail"></textarea>
                    <script>
                        $(document).ready(function () {
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
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="slug">
                </div>
                <div class="form-group">
                    <label for="status_select">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="form-control">

                </div>

                <button type="submit" class="btn btn-primary mr-2">Add package</button>
                <button class="btn btn-light">Cancel</button>
            </form>
            </tbody>
        </table>
    </div>

@endsection