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
    Email Verification Form
  </h2>
</section>

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('verify.store')}}" method="post">
                          @csrf
                            <h3 class="text-center text-info">Email Verify</h3>
                            <div class="form-group">
                                <label class="text-info">Emai:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                            </div>
                            <div class="form-group">
                                <label class="text-info">Verify Code:</label><br>
                                <input type="text" name="code" id="code" class="form-control" placeholder="Verify Code">
                                <span class="text-danger">{{($errors->has('code'))?($errors->first('code')):''}}</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
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

          email: {
            required: true,
            email: true,
          },
          code: {
            required: true,
          }
        },
        messages: {

          email:{
            required: 'Please enter your email address',
            email: 'Please enter a <em>valid</em> email address',
          },
          code:{
            required: 'Please enter verification code',
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
