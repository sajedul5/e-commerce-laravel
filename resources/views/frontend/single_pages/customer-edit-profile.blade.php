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
            <h3 class="text-center">Edit Profile</h3>
            <hr>
            <form class="" action="{{route('customer.update.profile')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-4 p-3">
                  <label>Full Name:</label>
                  <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                    <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                </div>
                <div class="col-md-4 p-3">
                  <label>Email:</label>
                  <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                    <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                </div>
                <div class="col-md-4 p-3">
                  <label>Mobile No:</label>
                  <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                    <span class="text-danger">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</span>
                </div>
                <div class="col-md-12 p-3">
                  <label>Address:</label>
                  <textarea name="address" class="form-control">{{$editData->address}}</textarea>
                    <span class="text-danger">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                </div>
                <div class="col-md-3 p-3">
                  <label>Gender:</label>
                  <select class="form-control" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{($editData->gender=="Male")?"selected":""}}>Male</option>
                    <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                  </select>
                    <span class="text-danger">{{($errors->has('gender'))?($errors->first('gender')):''}}</span>
                </div>
                <div class="col-md-3 p-3">
                  <label>Image:</label>
                  <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-md-3 p-3">
                  <img src="{{(!empty($editData->image))?url('public/upload/'.$editData->image):url('public/upload/no-image.png')}}"
                  style="width:100px; height:100px; border:1px solid #000;" id="showImage">
                </div>
                <div class="col-md-3 pt-5">
                  <button type="submit" class="btn btn-primary">Profile Update</button>
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
