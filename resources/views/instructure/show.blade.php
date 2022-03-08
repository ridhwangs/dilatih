@extends('theme.default')
@section('content')
  <!-- Hero Section-->

  <section class="bg-top py-5 pt-5"  style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: cover; ">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header bg-white">
                    <h3 class="text-header">Our Instructors</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <img src="{{ asset('storage/image/'.$detail->image) }}" class="card-img-top lazyload mb-3" alt="images">
                      </div>
                      <div class="col-md-9">
                        <b>Nama :</b>
                        <p> {!! $detail->nama_instruktur; !!}</p>
                        <b>Bidang :</b>
                        <p> {!! $detail->bidang; !!}</p>
                        <b>Deskripsi :</b>
                        <p> {!! $detail->deskripsi; !!}</p>
                         <p class="mb-0"><a  target="_blank" href="https://www.linkedin.com/in/{{ $detail->linkedin }}"><i class="fa-brands fa-linkedin" style="font-size:2em;"></i></a></p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      
      </div>
  </section>
@endsection