@extends('layouts.home')
@section('title','Reservations')


@section('content')
    <?php
    $grand = 0;
    ?>
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Package</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Package price</th>
                                    <th>(Days)</th>
                                    <th>Person</th>
                                    <th>Total Price</th>
                                    <th>Remove</th>

                                </tr>
                                </thead>
                                <tbody class="align-middle">

                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="{{route('package',['id'=>$rs->package->id,'slug'=>$rs->package->slug])}}"><img
                                                        src="{{Storage::url($rs->package->image)}}" height="30"
                                                        alt="Image">
                                                    <p>{{$rs->package->title}}</p>
                                                </a>
                                            </div>
                                        </td>
                                        <td>{{$rs->start_date}}</td>
                                        <td>{{$rs->end_date}}</td>
                                        <td>{{$rs->package->price}}</td>
                                        <?php
                                        $ilk = strtotime($rs->start_date);
                                        $son = strtotime($rs->end_date);

                                        $diff = ($son - $ilk) / 86400;
                                        $grand += $rs->package->price * $diff * $rs->person
                                        ?>
                                        <td>{{$diff}}</td>

                                        <td>

                                            <div class="qty">
                                                <form
                                                    action="{{route('user_reservation_update',['id'=>$rs->package->id])}}"
                                                    method="post">
                                                    @csrf
                                                    <input type="number" name="person"
                                                           value="{{$rs->person}}" onchange="this.form.submit()">

                                                </form>
                                            </div>

                                        </td>
                                        <td>{{$rs->package->price*($diff*$rs->person)}}</td>
                                        <td><a href="{{route('user_reservation_delete',['id'=>$rs->id])}}"><i
                                                    class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="coupon">
                                    <input type="text" placeholder="Coupon Code">
                                    <button>Apply Code</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
                                        <h1>Cart Summary</h1>
                                        <p>Sub Total<span>$99</span></p>
                                        <p>Shipping Cost<span>$1</span></p>
                                        <h2>Grand Total<span>{{$grand}}</span></h2>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="{{route('user_reservation_confirm')}}"><button><i
                                                class="fa fa-shopping-cart"></i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
