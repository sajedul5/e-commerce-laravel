<style media="screen">
  .video{
    width: 250px;
    height: 300px;
  }
  @media (max-width: 775px) {
    .video {
      text-align: center;
      padding: 0px 15px 0px 15px;
      width: 300px;
      height: 200px;
    }
  }
</style>
<!-- Slider -->
<section class="section-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="wrap-slick1">
          <div class="slick1">
            @foreach($sliders as $slider)
            <div class="item-slick1" style="background-image: url({{asset('public/upload/'.$slider->image)}});">
              <div class="container h-full">
                <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                  <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                    <span class="ltext-101 cl2 respon2 text-light">
                      {{$slider->short_title}}
                    </span>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1 text-light">
                      {{$slider->long_title}}
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="video mt-5">
          <iframe src="{{$videos->video}}" allowfullscreen class="video"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
