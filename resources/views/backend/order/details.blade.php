@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Approve Orders</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Order </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Order Deatils info
              </h3>
              <a href="{{route('order.pending.list')}}" class="btn btn-sm btn-info float-right">
                <i class="fa fa-list"></i> Pendiing List </a>
            </div><!-- /.card-header -->
            <div class="card-body">
              <table class="text-center my-3" width="100%" border="1">
                <tr>
                  <td colspan="3">
                    <strong>Order No: LF#{{$order->order_no}}</strong>
                  </td>
                </tr>
                <tr>
                  <td colspan="3"><strong>Billing Info</strong> </td>
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
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
