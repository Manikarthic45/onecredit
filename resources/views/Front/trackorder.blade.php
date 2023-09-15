@extends('Common.Frontheader')
@section('content')
<div class="cart-main-wrapper section-padding">
    <div class="container">
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <div class="row">

                            <div class="col-sm-4">
                                <h3>ORDER DETAILS</h3>
                            </div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                        </div>

                        <table class="table table-bordered">

                            <tr>
                                <th class="pro-thumbnail">ORDERID</th>
                                <th class="pro-title">NAME</th>
                                <th class="pro-title">PHONE</th>
                                <th class="pro-title">EMAIL</th>
                                <th class="pro-title">ZIPCODE</th>
                                <th class="pro-title">ADDRESS</th>
                                <th class="pro-price">TOTAL AMOUNT</th>
                                <th class="pro-quantity" style="width: 3%;">UPI REFNO</th>
                                <th class="pro-subtotal">ORDER STATUS</th>
                                <th class="pro-subtotal">CREATED AT</th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($check_data as $cat)
                                <tr>
                                    <td class="pro-title">{{$cat->orderid}}</td>
                                    <td class="pro-title">{{$cat->name}}</td>
                                    <td class="pro-title">{{$cat->phone}}</td>
                                    <td class="pro-title">{{$cat->email}}</td>
                                    <td class="pro-title">{{$cat->zipcode}}</td>
                                    <td class="pro-title">{{$cat->address}}</td>
                                    <td class="pro-title">{{$cat->totalamt}}</td>
                                    <td class="pro-title">{{$cat->upirefno}}</td>
                                    <td>@if($cat->track_status=="Order confirmed") <font color="red"> Order confirmed
                                        </font> @elseif($cat->track_status=="In process") <font color="blue"> In process
                                        </font> @elseif($cat->track_status=="Packed") <font color="yellow"> Packed
                                        </font> @elseif($cat->track_status=="Delivered") <font color="green"> Delivered
                                        </font>@else <font color="red"> Order confirmed
                                        </font> @endif</td>
                                    <td class="pro-title">
                                        @if($cat->track_status=="Initiate"){{date("d-m-Y H-i-s",strtotime($cat->created_at))}}
                                        @else{{date("d-m-Y H-i-s",strtotime($cat->updated_at))}}@endif
                                    </td>
                                </tr>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                </div>
            </div>
            <div style="height:50px;"></div>
        </div>
    </div>
</div>
@endsection