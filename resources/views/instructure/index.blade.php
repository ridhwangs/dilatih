@extends('theme.default')
@section('content')
  <!-- Hero Section-->
    <section class="hero bg-top pt-5" id="hero" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: 100% 100%;">
        <div class="container pt-5 mb-0">
        <div class="row" style="height:380px;">
            <div class="col-md-8" style="background-image: url('{!! asset('assets/img/img-instructure.svg') !!}');background-repeat:no-repeat;background-size:100%;background-position:center;">
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary" data-aos="flip-left" style="min-height: 8rem;">
                    <div class="card-body">
                        <h5 class="card-title">Meet Our Expert Instructor</h5>
                        <p class="card-text">Belajar langsung dari para ahli terkemuka dunia yang berbakat dalam mengajar</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="bg-center pt-5"  style="background: url({!! asset('assets/img/bg-instructure.svg') !!}) no-repeat; background-size: cover;">
        <div class="container text-center">
            <h2 class="mb-5 text-primary" data-aos="fade-up">Our Instructors</h2>
        </div>  
    <div class="container">
        <div class="row pb-5 gy-4">
             @if(Auth::check())
                <div class="col-12">
                    <a href="{{ route('instructure.create') }}" class="btn btn-primary col-md-12">New Instructure</a>
                </div>
            @endif
            <div class="container">
                <div class="row">
                    @foreach($instruktur AS $key => $rows)
                     <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-self-stretch mb-3" data-aos="fade-up">
                        <div class="card" >
                            <div class="card-body d-flex flex-column">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <picture>
                                            <source srcset="{{ asset('storage/image/'.$rows->image) }}" class="card-img-top lazyload" type="image/svg+xml">
                                            <img src="{{ asset('storage/image/'.$rows->image) }}" class="card-img-top lazyload" alt="img">
                                        </picture>
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <div class="pt-1">
                                            <h6><a href="{{ route('instructure.detail', $rows->kode_instruktur) }}">{{ $rows->nama_instruktur }}</a></h6>
                                            <p>{{ $rows->bidang }}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                 <p class="mb-0"><a  target="_blank" href="https://www.linkedin.com/in/{{ $rows->linkedin }}"><i class="fa-brands fa-linkedin" style="font-size:2em;"></i></a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
      </div>
    </section>
@endsection