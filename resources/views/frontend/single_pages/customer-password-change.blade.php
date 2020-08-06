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
    Customer Dashbroad
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
        <!-- Profile Image -->
        <div class="card card-info card-outline">
          <div class="card-body">
            <h3 class="text-center">Change Password</h3>
            <hr>
            <form class="" action="{{route('customer.update.password')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-4 p-3">
                  <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                    <span class="text-danger">{{($errors->has('current_password'))?($errors->first('current_password')):''}}</span>
                </div>
                <div class="col-md-4 p-3">
                  <input type="password" name="password"  class="form-control"  placeholder="New Password">
                    <span class="text-danger">{{($errors->has('password'))?($errors->first('password')):''}}</span>
                </div>
                <div class="col-md-4 p-3">
                  <input type="password" name="password_confirmation"  class="form-control" placeholder="Confirm Password">
                    <span class="text-danger">{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</span>
                </div>
                <div class="col-md-3">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="my-3">

        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About us -->

@endsection
