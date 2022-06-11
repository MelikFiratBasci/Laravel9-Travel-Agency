@extends('layouts.admin')
@section('title','edit Faq')

@section('javascript')
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
                <h4 class="card-title">Faq edit form</h4>
                <form class="forms-sample" action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" name="position" class="form-control" id="position" placeholder="position"
                               value="{{$data->position}}">
                    </div>
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" name="question" class="form-control" id="question" placeholder="question"
                               value="{{$data->question}}">
                    </div>

                    <div class="form-group">
                        <label>Answer</label>
                        <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                        <script>
                            $(document).ready(function () {
                                $('#answer').summernote();
                            });
                        </script>


                    </div>

                    <div class="form-group">
                        <label for="status_select">Status</label>
                        <select class="form-control" id="status" name="status" value="{{$data->status}}">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>


                    @include('home.messages')

                    <button type="submit" class="btn btn-primary mr-2">edit package</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

@endsection
