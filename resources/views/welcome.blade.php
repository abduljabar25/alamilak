@include('layouts.head')



 <div id="hero-animated" class="hero-animated d-flex align-items-center">
    <div id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="{{asset('assets/img/hero-carousel-3.svg')}}"  class="img-fluid animated" >
          <h2> اهلابكم في <span>نظام ادارة الاملاك</span></h2>
      <div class="d-flex">
        <a href="{{ url('new') }}" class="btn-get-started scrollto">ابدأ</a>
      </div>
          </div>
        </div>
    </div>
    @include('layouts.footer-scrpt')