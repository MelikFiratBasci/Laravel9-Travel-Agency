@extends('layouts.home')
@section('title','contact -'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
   {!! $setting->contact !!}
@endsection
