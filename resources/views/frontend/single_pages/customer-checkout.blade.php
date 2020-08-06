@extends('frontend.layouts.master')
@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/frontend/images/bg-02.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    Customer Billing Information
  </h2>
</section>

<!-- Start About us -->
<section id="mu-about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="m-5">
          <div class="card card-info card-outline">
            <div class="card-body">
              <h3 class="text-center">Order Information</h3>
              <hr>
              <form class="" action="{{route('customer.checkout.store')}}" method="post" id="checkout-form">
                @csrf
                <div class="row">
                  <div class="col-md-4 p-3">
                    <label>Full Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                      <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                  </div>
                  <div class="col-md-4 p-3">
                    <label>Email:</label>
                    <input type="type" name="email"  class="form-control">
                  </div>
                  <div class="col-md-4 p-3">
                    <label>Mobile No:</label>
                    <input type="text" name="mobile_no" id="mobile_no" class="form-control">
                      <span class="text-danger">{{($errors->has('mobile_no'))?($errors->first('mobile_no')):''}}</span>
                  </div>
                  <div class="col-md-12 p-3">
                    <label>Address:</label>
                    <textarea name="address" id="aaddress" class="form-control"></textarea>
                      <span class="text-danger">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                  </div>
                  <div class="col-md-3 pt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About us -->
<!-- validation script -->
<script type="text/javascript">
 $(document).ready(function () {
  $('#checkout-form').validate({
    rules: {
      name: {
        required: true,
      },
      mobile_no: {
        required: true,
      },
      address: {
        required: true,
      }
    },
    messages: {
      name:{
        required: 'Please enter your full name'
      },
      mobile_no:{
        required: 'Please enter your mobile no'
      },
      address:{
        required: 'Please enter your address'
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
