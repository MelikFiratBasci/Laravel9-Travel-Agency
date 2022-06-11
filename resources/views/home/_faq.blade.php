@extends('layouts.home')
@section('title','Frequently Asked questions')
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
@endsection

@section('content')
    <div id="accordion">
        @foreach($datalist as $rs)
            <div>
                <h3>o {{$rs->question}}</h3>
                <p>{!!$rs->answer!!}</p>
            </div>
        @endforeach
    </div>
@endsection
