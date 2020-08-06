@extends('frontend.layouts.master')
@section('content')
<style media="screen">
  .sss{
    float: left;
  }
  .s888{
    height: 40px;
    border: 1px solid #e6e6e6;
  }
</style>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/frontend/images/bg-02.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    Payment Method
  </h2>
</section>

<!-- Shoping Cart -->
<div class="bg0 p-t-75 p-b-85">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 30px;">
        <div class="wrap-table-shopping-cart">
          <table class="table table-bordered">
            <tr class="table_head">
              <th>Product</th>
              <th>Image</th>
              <th>Size</th>
              <th>Color</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>action</th>
            </tr>
            @php
              $contents = Cart::content();
              $total = 0;
            @endphp
            @foreach($contents as $content)
            <tr class="table_row">
              <td>{{$content->name}}</td>
              <td>
                <div class="how-itemcart1">
                  <img src="{{asset('public/upload/'.$content->options->image)}}" alt="IMG" style="width:90px;height: 90px;">
                </div>
              </td>
              <td>{{$content->options->size_name}}</td>
              <td>{{$content->options->color_name}}</td>
              <td>{{$content->price}} Tk</td>
              <td>
                <form  action="{{route('update.cart')}}" method="post">
                  @csrf
                  <div style="width:150px; min-width:150px; ">
                    <input class="mtext-104 cl3 txt-center num-product form-control sss" id="qty" type="number" name="qty" value="{{$content->qty}}">
                    <input type="hidden" name="rowId" value="{{$content->rowId}}">
                    <input type="submit" value="update" class="flex-c-m stext-101 cl2 bg8 s888 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                  </div>
                </form>
              </td>
              <td>{{$content->subtotal}} Tk</td>
              <td>
                <a href="{{route('delete.cart',$content->rowId)}}" class="btn btn-danger"> <i class="fa fa-times"></i> </a>
              </td>
            </tr>
            @php
              $total += $content->subtotal;
            @endphp
            @endforeach
            <tr>
              <td colspan="6" style="text-align: right"><strong>Grand Total</strong></td>
              <td colspan="2"> <strong>{{$total}} Tk</strong></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h4>Select Payment Method</h4>
      </div>
      <div class="col-md-4">
        @if(Session::get('message'))
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>{{Session::get('message')}}</strong>
        </div>
        @endif
        <form class="" action="{{route('customer.payment.store')}}" method="post" id="payment-form">
          @csrf
          @foreach($contents as $content)
          <input type="hidden" name="product_id" value="{{$content->id}}">
          @endforeach
          <input type="hidden" name="order_total" value="{{$total}}">
          <select class="form-control" name="payment_method" id="payment_method">
            <option value="">Select Payment Type</option>
            <option value="Hand Cash">Hand Cash</option>
            <option value="Bkash">Bkash</option>
          </select>
          <span class="text-danger">{{($errors->has('payment_method'))?($errors->first('payment_method')):''}}</span>
          <div class="show_field" style="display: none;">
              <strong>Bkash No Is: 01517167169</strong>
              <input type="text" name="transaction_no" class="form-control" placeholder="Write Transaction No">
          </div>
          <button type="submit" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).on('change','#payment_method',function(){
    var payment_method = $(this).val();
    if(payment_method == 'Bkash'){
      $('.show_field').show();
    }
    else{
      $('.show_field').hide();
    }
  });
</script>

<!-- validation script -->
<script type="text/javascript">
 $(document).ready(function () {
  $('#payment-form').validate({
    rules: {
      payment_method: {
        required: true,
      }
    },
    messages: {
      payment_method:{
        required: 'Please select payment method'
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection
