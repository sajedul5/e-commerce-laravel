@extends('frontend.layouts.master')
@section('content')
<style media="screen">
    #login .container #login-row #login-column #login-box {
    margin-top: 40px;
    max-width: 600px;
    border: 1px solid #9C9C9C;
    background-color: #EAEAEA;
    margin-bottom: 50px;
    }
    #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
    }
</style>
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/frontend/images/bg-02.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    Customer Signup
  </h2>
</section>

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('signup.store')}}" method="POST">
                          @csrf
                            <h3 class="text-center text-info">Signup</h3>
                            <div class="form-group">
                                <label class="text-info">Full Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" value="{{old('name')}}">
                                <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Emai:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" value="{{old('email')}}">
                                <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Mobile No:</label><br>
                                <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Your Mobile No" value="{{old('mobile')}}">
                                <span class="text-danger">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
                                <span class="text-danger">{{($errors->has('password'))?($errors->first('password')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Confirm Password:</label><br>
                                <input type="password" name="confirmation_password" id="confirmation_password" class="form-control" placeholder="Confirm Password">
                                <span class="text-danger">{{($errors->has('confirmation_password'))?($errors->first('confirmation_password')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Address:</label><br>
                                <textarea name="address" class="form-control" id="address" placeholder="Your Address">{{old('address')}}</textarea>
                                <span class="text-danger">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Signup">
                                <i class="fa fa-user"></i> Have your account? <a href="{{route('customer.login')}}"><span>Login Here</span> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- validation script -->
  <script type="text/javascript">
    $(document).ready(function () {
      $('#login-form').validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          mobile: {
            required: true,
          },
          password: {
            required: true,
            minlength: 6
          },
          confirmation_password: {
            required: true,
            equalTo: '#password'
          },
          address: {
            required: true,
          }
        },
        messages: {
          name:{
            required: 'Please enter your full name'
          },
          mobile:{
            required: 'Please enter your mobile no'
          },
          email:{
            required: 'Please enter your email address',
            email: 'Please enter a <em>valid</em> email address',
          },
          password:{
            required: 'Please enter your password',
            minlength: 'Password will be minimum 6 characters or numbers',
          },
          confirmation_password:{
            required: 'Please enter confirm password',
            equalTo: 'Confirm password does not match',
          },
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
