<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide slider1">
        <img src="{{asset('images/slider1.jpg')}}" height="100%" width="100%" loading="lazy" alt="">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        <div class="swiper-shade"></div>
        <div class="slider-detail">
            <h1>Your <span>customers</span> are<br>our first priority</h1>
            <a href="#" class="slider-detail-btn"><i class="fas fa-square-plus"></i> Read more</a>
        </div>
    </div>
    <div class="swiper-slide slider2">
        <img src="{{asset('images/slider2.jpg')}}" height="100%" width="100%" loading="lazy" alt="">
        <div class="swiper-shade"></div>
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
    </div>
    <div class="swiper-slide slider3">
        <img src="{{asset('images/slider4.jpg')}}" height="100%" width="100%" loading="lazy" alt="">
        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
    </div>
  </div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-btn"></div>
  <div class="swiper-button-next swiper-btn"></div>

  <!-- If we need scrollbar -->
    <div class="autoplay-progress">
        <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
        </svg>
        <span></span>
    </div>
</div>