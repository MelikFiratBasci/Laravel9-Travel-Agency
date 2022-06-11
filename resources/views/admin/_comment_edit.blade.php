<!-- Favicon -->
<link href="{{asset('assets')}}/img/logo.png" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
      rel="stylesheet">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick.css" rel="stylesheet">
<link href="{{asset('assets')}}/lib/slick/slick-theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css"/>

<!-- Template Stylesheet -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
@yield('css')
@yield('headerjs')
<div class="col-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">comment Detail</h4>
            <form class="forms-sample" action="{{route('admin_comment_update',['id'=>$data->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>subject</th>
                                <th>review</th>
                                <th>rate</th>
                                <th>Ip</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <p>{{$data->id}}</p>
                                </td>
                                <td>
                                    <p>{{$data->user->name}}</p>
                                </td>
                                <td>
                                    <p>{{$data->subject}}</p>
                                </td>
                                <td>
                                    <p>{{$data->review}}</p>
                                </td>
                                <td>
                                    <p>{{$data->rate}}</p>
                                </td>
                                <td>
                                    <p>{{$data->IP}}</p>
                                </td>
                                <td>
                                    <p>{{$data->status}}</p>
                                </td>


                                <td>
                                    <label class="badge badge-warning badge-outline-danger">
                                        <a href="{{route('admin_comment_show',['id'=>$data->id])}}"
                                           class="nav-link" onclick="return !window.open(this.href,'','','top=50 left 100 width 1100 height=700')">edit</a></label>
                                </td>
                                <td>
                                    <label class="badge badge-danger"><a class="nav-link"
                                                                         href="{{route('admin_comment_delete',['id'=>$data->id])}}"
                                                                         onclick="return confirm('Delete!! Are you sure?')">delete</a></label>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
            </form>
        </div>
    </div>
</div>


