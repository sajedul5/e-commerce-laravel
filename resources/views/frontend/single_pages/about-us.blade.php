@extends('frontend.layouts.master')
@section('content')

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/frontend/images/bg-02.jpg');">
  <h2 class="ltext-105 cl0 txt-center">
    About Us
  </h2>
</section>

<!-- Start About us -->
<section id="mu-about-us">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-about-us-area">
          <div class="row">
            <div class="col-md-12">
              <div class="card p-5 m-3">
                {{$abouts->about}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About us -->

@endsection
