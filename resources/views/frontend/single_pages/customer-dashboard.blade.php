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
          <div class="card-body box-profile">
            <div class=" text-center" >
              <img class="img-circle"
                   src="{{(!empty($user->image))?url('public/upload/'.$user->image):url('public/upload/no-image.png')}}"
                   alt="User profile picture">
            </div>
            <h3 class="profile-username text-center py-3">{{$user->name}}</h3>
            <table width="100%" class="table table-bordered">
              <tbody>
                <tr>
                  <td>Email</td>
                  <td>{{$user->email}}</td>
                </tr>
                <tr>
                  <td>Mobile No</td>
                  <td>{{$user->mobile}}</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>{{$user->gender}}</td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td>{{$user->address}}</td>
                </tr>
              </tbody>
            </table>
            <a href="{{route('customer.edit.profile')}}" class="btn btn-info btn-block"><b>Edit Profile</b></a>
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
