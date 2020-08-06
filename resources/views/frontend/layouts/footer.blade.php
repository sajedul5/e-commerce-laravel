<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-6 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          Contact Us
        </h4>
        <p class="stext-107 cl7 hov-cl1 trans-04" style="font-size: 15px;">
          Address: {{$contact->address}} &nbsp; Cell: {{$contact->phone}} , &nbsp; Email: {{$contact->email}}
        </p>
      </div>

      <div class="col-sm-6 col-lg-6 p-b-50">
        <h4 class="stext-301 cl0 p-b-30">
          Follow Us
        </h4>

        <ul class="social">
          <li class="facebook"><a href="{{$contact->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="twitter"><a href="{{$contact->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="instagram"><a href="{{$contact->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li class="youtube"><a href="{{$contact->youtube}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          <li class="linkedin"><a href="{{$contact->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="p-t-40">
      <hr class="bg-light">
      <p class="stext-107 cl6 txt-center">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://www.mdsajedulislam.com/">www.mdsajedulislam.com</a>
      </p>
    </div>
  </div>
</footer>