<?php
$grand = 0;
?>
<div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
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

            @foreach($orderlist as $rs)
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
                        {{$rs->person}}
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
