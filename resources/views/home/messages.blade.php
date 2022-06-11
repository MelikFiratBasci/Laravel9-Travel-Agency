@if($message=Session::get('success'))
    <div class="aler alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message=Session::get('error'))
    <div class="aler alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message=Session::get('warning'))
    <div class="aler alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message=Session::get('info'))
    <div class="aler alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

