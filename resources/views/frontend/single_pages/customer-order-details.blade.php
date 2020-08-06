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
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('../public/frontend/images/bg-02.jpg');">
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
        <table class="text-center my-3" width="100%" border="1">
          <tr>
            <td width="30%">
                <img src="{{url('public/upload/'.$logo->image)}}" alt="IMG-LOGO" width="100px" height="100px">
            </td>
            <td width="40%">
              <strong>Fusion</strong>
              <br>
              <span> <strong>Mobile No:</strong> {{$contact->phone}}</span>
              <br>
              <span> <strong>Email:</strong> {{$contact->email}}</span>
              <br>
              <span> <strong>Address:</strong> {{$contact->address}}</span>
            </td>
            <td width="30%">
              <strong>Order No: LF#{{$order->order_no}}</strong>
            </td>
          </tr>
          <tr>
            <td colspan="3"><strong>Billing Info:</strong> </td>
          </tr>
          <tr>
            <td style="text-align: left;">
              <strong>Name:</strong>
            </td>
            <td colspan="2" style="text-align: left;">
              {{$order['shipping']['name']}}
            </td>
          </tr>
          <tr>
            <td style="text-align: left;">
              <strong>Mobile No:</strong>
            </td>
            <td colspan="2" style="text-align: left;">
              {{$order['shipping']['mobile_no']}}
            </td>
          </tr>
          <tr>
            <td style="text-align: left;">
              <strong>Email:</strong>
            </td>
            <td colspan="2" style="text-align: left;">
              {{$order['shipping']['email']}}
            </td>
          </tr>
          <tr>
            <td style="text-align: left;">
              <strong>Address:</strong>
            </td>
            <td colspan="2" style="text-align: left;">
              {{$order['shipping']['address']}}
            </td>
          </tr>
          <tr>
            <td style="text-align: left;">
              <strong>Payment Type:</strong>
            </td>
            <td colspan="2" style="text-align: left;">
              {{$order['payment']['payment_method']}}
              @if($order['payment']['payment_method']=='Bkash')
                (TN: {{$order['payment']['transaction_no']}})
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="3"><strong>Order Details</strong> </td>
          </tr>
          <tr>
            <td><strong>Product Name & Image</strong></td>
            <td><strong>Color & Size</strong></td>
            <td><strong>Quantity & Price</strong></td>
          </tr>
          @foreach($order['order_details'] as $details)
          <tr>
            <td>
              <img src="{{url('public/upload/'.$details['product']['image'])}}"
              style="width:80px; height:80px;">
              <br>
              {{$details['product']['name']}}
            </td>
            <td>
              {{$details['color']['name']}}
              <br>
              {{$details['size']['name']}}
            </td>
            <td>
              @php
               $sub_total = $details->quantity*$details['product']['price']
              @endphp
               {{$details->quantity}} x
               {{$details['product']['price']}}=
               {{$sub_total}}Tk

            </td>
          </tr>
          @endforeach
          <tr>
            <td colspan="2" style="text-align: right;"><strong> Grand Total</strong></td>
            <td><strong>{{$order->order_total}}Tk</strong></td>
          </tr>
        </table>
    </div>
  </div>
</div>
</section>
<!-- End About us -->

@endsection
