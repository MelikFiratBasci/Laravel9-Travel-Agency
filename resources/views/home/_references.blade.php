@extends('layouts.home')
@section('title','References -'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
{!!$setting->references !!}
@endsection
