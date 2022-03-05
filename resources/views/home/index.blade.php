@extends('theme.default')
@section('content')
    <!-- Hero Section-->
    <section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%">
        <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-5 py-5">
            <h1>Complete Your Dream in dilatih.co </h1>
            <p class="my-4 text-muted">
                Learn any program in distance and for a reasonable fee. You don’t have to struggle alone, you’ve got our assistance and
                help.
            </p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item mb-2 mb-lg-0"><a class="btn btn-primary btn-lg px-4" href="#!">Explore Our Program</a></li>
            </ul>
            </div>
            <div class="col-lg-6 ml-auto" style="background-image: url('{!! asset('assets/img/home.png') !!}');background-repeat:no-repeat;background-size:contain;background-position:right;">
            </div>
        </div>
        </div>
        
    </section>
    <section class="bg-center py-0" id="training" style="background: url({!! asset('assets/img/service-bg.svg') !!}) no-repeat; background-size: cover">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-5 p-4">
                    <span class="fa-stack fa-2x">
                    <i class="fa-solid fa-graduation-cap fa-stack-2x" style="color: #320B75;"></i>
                    </span>
                </div>
                <div class="col-7">
                    <div class="card-body">
                    <h5 class="card-title">LEARN FROM THE EXPERTS</h5>
                    <p class="card-text">Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing
                        eiusmod ipsum.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-5 p-4">
                    <span class="fa-stack fa-2x">
                    <i class="fa-solid fa-award fa-stack-2x" style="color: #320B75;"></i>
                    </span>
                </div>
                <div class="col-7">
                    <div class="card-body">
                    <h5 class="card-title">ONLINE EDUCATION</h5>
                    <p class="card-text">Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing
                        eiusmod ipsum.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <section class="with-pattern-1 py-5" id="instructure">
        <div class="container py-5">
            <div class="row align-items-center mb-5 gy-5">
            <div class="col-lg-6"><img class="img-fluid w-100 px-lg-5" src="{!! asset('assets/img/objects.svg') !!}" alt=""></div>
            <div class="col-lg-6">
                <h2>Welcome to dilatih.co</h2>
                <p class="text-muted">Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum. Lorem ipsum dolor amet
                elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum.</p>
                <button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo"><i
                    class="fas fa-play-circle me-2"></i>Play Tutorial</button>
            </div>
            </div>
            
        </div>
        </section>
    </section>
    <section class="bg-top py-5"  style="background: url({!! asset('assets/img/banner-1.png') !!}) no-repeat; background-size: cover">
        <div class="container">
        <p class="h6 text-uppercase text-primary">CHOOSE WHERE YOU’D LIKE TO BEGIN</p>
        <h2 class="mb-5">Promoted Workshop</h2>
        <div class="container">
          <div class="row pb-5 gy-4">
            @for($x = 1; $x <= 6; $x++)
              <div class="col-lg-4 col-md-6">
                <!-- Services Item-->
                <div class="card border-0 shadow rounded-lg text-start">
                    <img src="{!! asset('assets/img/service-test.png') !!}" class="card-img-top">
                    <div class="card-body mb-0 p-3">
                    <h3 class="h6 my-2"><a href="">Financial Management Professional</a></h3>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item p-0 border-0"><i class="fa-solid fa-globe"></i> Online</li>
                        <li class="list-group-item p-0 ms-2 border-0"><i class="fa-solid fa-users"></i> Tatap Muka</li>
                    </ul>
                    </div>
                    <div class="card-footer bg-white">
                    <div class="d-flex justify-content-between">
                        <div>
                        <i class="fa-solid fa-calendar"></i> 17-19 Maret 2022
                        </div>
                        <div>
                        Rp. 250.000
                        </div>
                    </div>
                    </div>
                </div>
              </div>
              @endfor
          </div>
        </div>
    </section>
    <section id="event" class="bg-top py-5 container">
      <div class="container text-center">
        <p class="h6 text-uppercase text-primary">GET IN CONTACT NOW</p>
        <h2 class="mb-5">Upcoming Events</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 p-2">    
          <div class="card">
            <div class="card-header bg-white">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-0 border-0"><i class="fa-solid fa-globe"></i> Online</li>
                <li class="list-group-item p-0 ms-2 border-0"><i class="fa-solid fa-users"></i> Tatap Muka</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                <h5 class="card-title">Financial Management Professional</h5>
                <p class="card-text">
                  Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum.
                </p>
                </div>
                  <div class="col-md-3 text-nowrap">
                    <div class="container h-100">
                      <div class="row align-items-center h-100">
                        <div class="col-md-6 col-sm-12 mx-auto">
                          <h1>24</h1>
                          <p class="card-text"><small class="text-muted">September</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <a href="#" class="btn btn-sm col-12 btn-primary">Book Now</a>
            </div>
           
           
          </div>
        </div>
        <div class="col-sm-6 p-2">
          <div class="card">
            <div class="card-header bg-white">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-0 border-0"><i class="fa-solid fa-globe"></i> Online</li>
                <li class="list-group-item p-0 ms-2 border-0"><i class="fa-solid fa-users"></i> Tatap Muka</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="card-title">Financial Management Professional</h5>
                  <p class="card-text">
                    Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum.
                  </p>
                </div>
                <div class="col-md-3 text-nowrap">
                  <div class="container h-100">
                    <div class="row align-items-center h-100">
                      <div class="col-md-6 col-sm-12 mx-auto">
                        <h1>24</h1>
                        <p class="card-text"><small class="text-muted">September</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <a href="#" class="btn btn-sm col-12 btn-primary">Book Now</a>
            </div>
        
        
          </div>
        </div>
        <div class="col-sm-6 p-2">
          <div class="card">
            <div class="card-header bg-white">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-0 border-0"><i class="fa-solid fa-globe"></i> Online</li>
                <li class="list-group-item p-0 ms-2 border-0"><i class="fa-solid fa-users"></i> Tatap Muka</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="card-title">Financial Management Professional</h5>
                  <p class="card-text">
                    Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum.
                  </p>
                </div>
                <div class="col-md-3 text-nowrap">
                  <div class="container h-100">
                    <div class="row align-items-center h-100">
                      <div class="col-md-6 col-sm-12 mx-auto">
                        <h1>24</h1>
                        <p class="card-text"><small class="text-muted">September</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <a href="#" class="btn btn-sm col-12 btn-primary">Book Now</a>
            </div>
        
        
          </div>
        </div>
        <div class="col-sm-6 p-2">
          <div class="card">
            <div class="card-header bg-white">
              <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-0 border-0"><i class="fa-solid fa-globe"></i> Online</li>
                <li class="list-group-item p-0 ms-2 border-0"><i class="fa-solid fa-users"></i> Tatap Muka</li>
              </ul>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="card-title">Financial Management Professional</h5>
                  <p class="card-text">
                    Lorem ipsum dolor amet elit, sed do eiusmod tempor doincidunt lorem adipisicing eiusmod ipsum.
                  </p>
                </div>
                <div class="col-md-3 text-nowrap">
                  <div class="container h-100">
                    <div class="row align-items-center h-100">
                      <div class="col-md-6 col-sm-12 mx-auto">
                        <h1>24</h1>
                        <p class="card-text"><small class="text-muted">September</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <a href="#" class="btn btn-sm col-12 btn-primary">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0" id="contact-us" style="background: url({!! asset('assets/img/testimonials-bg.png') !!}) no-repeat; background-size: 40% 100%; background-position: left center">
      <div class="container text-center">
        <p class="h6 text-uppercase text-primary">PEOPLE ARE PRAISING dilatih.co</p>
        <h2 class="mb-5">What Make They Love Us</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="swiper testimonials-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-1.jpg') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h5 class="mb-0">Sarah Hudson</h5>
                        <p class="text-primary mb-0 text-sm">Tech Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-2.png') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h5 class="mb-0">Frank Smith</h5>
                        <p class="text-primary mb-0 text-sm">Tech Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-1.jpg') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h5 class="mb-0">Sarah Hudson</h5>
                        <p class="text-primary mb-0 text-sm">Tech Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-2.png') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <h5 class="mb-0">Frank Smith</h5>
                        <p class="text-primary mb-0 text-sm">Tech Developer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection