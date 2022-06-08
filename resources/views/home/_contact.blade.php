@extends('layouts.home')
@section('title','contact -'.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords',$setting->keywords)
@section('content')
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                {!! $setting->contact !!}
                <div class="col-lg-4">
                    <div class="contact-form">
                        <h3 class="section-title">Iletisim Formu</h3>
                        <form id="contact-form" class="clearfix" method="post" action="{{route('sendmessage')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="input" placeholder="name&surname" name="name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="phone" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
