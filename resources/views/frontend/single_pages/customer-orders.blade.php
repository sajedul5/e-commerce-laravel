@extends('frontend.layouts.master')
@section('content')
<style media="screen">
  .prof li{
    background: #1781BF;
    border-radius: 8px;
    padding: 10px;
    margin: 5px;
  }
  .prof li a{
    color: #fff;
    padding-left: 15px;
  }
  .img-circle{
    height: 150px;
    width: 150px;
    border-radius: 50px;
  }
</style>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/frontend/images/bg-02.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    Customer Dashboard
  </h2>
</section>

<!-- Start About us -->
<section id="mu-about-us">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <ul class="prof">
          <li><a href="{{route('dashbroad')}}">My Profile</a></li>
          <li><a href="{{route('customer.password.change')}}">Password Change</a></li>
          <li><a href="{{route('customer.order.list')}}">My Orders</a></li>
        </ul>
      </div>
      <div class="col-md-9">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Order No</th>
              <th>Total Amount</th>
              <th>Payment Type</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
            <tr>
              <td>#LF{{$order->order_no}}</td>
              <td>{{$order->order_total}}</td>
              <td>
                {{$order['payment']['payment_method']}}
                @if($order['payment']['payment_method']=='Bkash')
                  (TN: {{$order['payment']['transaction_no']}})
                @endif
              </td>
              <td>
                @if($order->status=='0')
                <strong class="text-danger ">Unapproved</strong>
                @elseif($order->status=='1')
                <strong class="text-success">Approved</strong>
                @endif
              </td>
              <td>
                <a href="{{route('customer.order.details',$order->id)}}" title="Details" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                <a href="{{route('customer.order.print',$order->id)}}" title="Print" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      <div class="my-3">

      </div>
    </div>
  </div>
</div>
</section>
<!-- End About us -->

@endsection
