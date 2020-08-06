<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Invoice</title>
    <style media="screen">
      .contient{
        margin:  20px 200px 20px 200px ;
      }
      .text-center{

      }
    </style>
  </head>
  <body>
      <center class="contient">
        <h3>Fusion Ltb.</h3>
        <h4>Customer Invoice</h4>
        <hr>
        <table class="text-center my-3" width="100%" border="1" style="text-align: center;">
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
      </center>
  </body>
</html>
