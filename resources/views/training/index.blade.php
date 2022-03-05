@extends('theme.default')
@section('content')
  <!-- Hero Section-->
  <section class="bg-center pt-5" id="hero" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat;  background-size: cover;">
      <div class="container text-center pt-5">
        <p class="h3 text-uppercase ">Look for your Online Training Courses</p>
        <form>
          <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="What do you want to learn today ?">
            <button type="button" class="btn btn-primary">Search</button>
          </div>
            <img src="{!! asset('assets/img/img-training.svg') !!}" class="img-fluid rounded mx-auto d-block mb-0" >
      
        </form>
      </div> 
  </section>
  <section class="bg-top py-5"  style="background: url({!! asset('assets/img/banner-1.png') !!}) no-repeat; background-size: cover;">
      <div class="container">
        <div class="row pb-5 gy-4">
           @for($x = 1; $x <= 10; $x++)
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
@endsection