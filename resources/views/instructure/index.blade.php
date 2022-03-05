@extends('theme.default')
@section('content')
  <!-- Hero Section-->
    <section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: 100% 80%;">
        <div class="container py-5">
        <div class="row" style="height:550px;">
             <div class="col-md-8" style="background-image: url('{!! asset('assets/img/img-instructure.svg') !!}');background-repeat:no-repeat;background-size:100%;background-position:center;">
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3" style="min-height: 14rem;">
                    <div class="card-body">
                        <h5 class="card-title">Meet Our Expert Instructor</h5>
                        <p class="card-text">Belajar langsung dari para ahli terkemuka dunia yang berbakat dalam mengajar</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success col-12">View More</button>
                    </div>
                </div>
            </div>
           
        </div>
        </div>
    </section>
    <section class="bg-top py-5"  style="background: url({!! asset('assets/img/bg-instructure.svg') !!}) no-repeat; background-size: cover;">
      <div class="container">
        <div class="row pb-5 gy-4">
            @for($x = 1; $x <= 5; $x++)
            <div class="col-lg-4 col-md-4">
                <div class="card mb-3" >
                    <div class="row g-0">
                        <div class="col-md-7">
                        <img src="{!! asset('assets/img/instructure.png') !!}" class="card-img-top"  style="min-height:550px;">
                        </div>
                        <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title">NickName</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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