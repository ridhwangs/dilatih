@extends('theme.default')
@section('content')
  <!-- Hero Section-->
    <section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: 100% 80%;">
        <div class="container py-5">
        <div class="row" style="height:550px;">
             <div class="col-md-8" style="background-image: url('{!! asset('assets/img/img-instructure.svg') !!}');background-repeat:no-repeat;background-size:100%;background-position:center;">
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-primary" style="min-height: 14rem;">
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
        <div class="container text-center">
            <h2 class="mb-5">Our Instructor</h2>
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
                    <div class="col-xs-12 col-sm-4 col-md-4 mb-3">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{{ asset('storage/image/'.$rows->image) }}" alt="" class="img-thumbnail" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>{{ $rows->nama_instruktur }}</h4>
                                    <small>{{ $rows->bidang }}</small>
                                    <p class="mb-0"><a  target="_blank" href="https://www.linkedin.com/in/{{ $rows->linkedin }}"><i class="fa-brands fa-linkedin"></i> {{ $rows->linkedin }}</a></p>
                                    
                                </div>
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