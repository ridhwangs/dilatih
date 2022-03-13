@extends('theme.default')
@section('content')

  <section class="bg-center pt-5" id="hero" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat;  background-size: cover;">
      <div class="container text-center p-5">
        <p class="h2 text-uppercase text-primary" data-aos="fade-up">Our Activity Journal</p>
        <b  data-aos="fade-in">make sure you are with us</b>
  </section>
  <section class="bg-top py-5"  style="background: url({!! asset('assets/img/testimonials-bg.png') !!}) no-repeat; background-size: cover;min-height:80vh;" >
      <div class="container">
        <div class="row pb-5 gy-4">
            @if($kursus->count() > 0)
              @foreach($kursus AS $key => $rows)
                  <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-self-stretch" data-aos="fade-up">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg">
                    <div class="card-header p-0 align-self-stretch">
                      <img src="{{ asset('storage/image/'.$rows->image) }}" class="card-img-top lazyload" loading=”lazy” alt="Card Image">
                    </div>
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title"><a href="{{ route('activity.detail', Str::slug($rows->nama, '-')) }}">{{ $rows->nama; }}</a></h5>
                      <a href="{{ route('instructure.detail', $rows->kode_instruktur) }}" class="text-muted"><p class="card-text mb-4"><i class="fa-solid fa-user" style="color: #320B75;"></i> {{ $rows->instruktur->nama_instruktur }}</p></a>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between">
                            <div>
                            <i class="fa-solid fa-calendar"></i> 
                            <span style="margin-right:8px;">
                              @if(date('Y-m-d', strtotime($rows->date_start)) == date('Y-m-d', strtotime($rows->date_end)))
                              {{ date('d', strtotime($rows->date_start)) }} {{ date('F', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                              @elseif(date('Y-m', strtotime($rows->date_start)) == date('Y-m', strtotime($rows->date_end)))
                              {{ date('d', strtotime($rows->date_start)) }} - {{ date('d', strtotime($rows->date_end)) }} {{ date('F', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                              @else
                                {{ date('d F', strtotime($rows->date_start)) }} - {{ date('d F', strtotime($rows->date_end)) }}  {{ date('Y', strtotime($rows->date_end)) }}
                              @endif
                            </span>
                            
                            </div>
                            <div>
                              @if($rows->biaya == 0)
                                Free
                              @else
                                Rp. {{ number_format($rows->biaya) }}
                              @endif
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              @endforeach
                <div class="col-md-12 d-flex justify-content-center"> {!! $kursus->links() !!} </div>
            @else
              <div class="col-md-12">
                  <div class="card border-0 shadow rounded-lg text-start">
                    <div class="card-body text-center">
                      <p class="h5">Mohon maaf, untuk sementara waktu aktifitas tidak tersedia...</p>
                    </div>
                  </div>
              </div>
            @endif
        </div>
      </div>
  </section>
@endsection