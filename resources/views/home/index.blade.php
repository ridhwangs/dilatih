@extends('theme.default')
@section('content')
    <!-- Hero Section-->
    <section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%">
        <div class="container py-5">
        <div class="row py-5" >
            <div class="col-lg-5 py-5">
            <h1 data-aos="zoom-in-right" class="text-primary">Complete Your Dream in dilatih.co </h1>
            <p class="my-4 text-muted" data-aos="zoom-out-up">
                Learn any program in distance and for a reasonable fee. You don’t have to struggle alone, you’ve got our assistance and
                help.
            </p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item mb-2 mb-lg-0"><a data-aos="fade-down" class="btn btn-primary btn-lg px-4" href="{{ route('training')}}">Explore Our Program</a></li>
            </ul>
            </div>
            <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-duration="3000" style="background-image: url('{!! asset('assets/img/home.png') !!}');background-repeat:no-repeat;background-size:contain;background-position:right;">
            </div>
        </div>
        </div>
        
    </section>
    <section class="bg-center py-0" id="training" style="background: url({!! asset('assets/img/service-bg.svg') !!}) no-repeat; background-size: cover">
        <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-left">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-5 pt-3 text-center">
                    <span class="fa-stack">
                    <i class="fa-solid fa-graduation-cap" style="font-size:4.5em;color: #320B75;"></i>
                    </span>
                </div>
                <div class="col-7">
                    <div class="card-body">
                    <h5 class="card-title">LEARN FROM THE EXPERTS</h5>
                    <p class="card-text">Belajar sesuatu langsung dari ahlinya</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6" data-aos="fade-right">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-5 pt-3 text-center">
                    <span class="fa-stack">
                    <i class="fa-solid fa-award" style="font-size:4.5em;color: #320B75;"></i>
                    </span>
                </div>
                <div class="col-7">
                    <div class="card-body">
                    <h5 class="card-title">ONLINE EDUCATION</h5>
                    <p class="card-text">Pembelajaran secara online tidak terbatas oleh tempat dan waktu</p>
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
            <div class="col-lg-6"><img class="img-fluid w-100 px-lg-5" src="{!! asset('assets/img/objects.svg') !!}" data-aos="fade-right" alt=""></div>
            <div class="col-lg-6">
                <h2 data-aos="zoom-in" class="text-primary">Welcome to dilatih.co</h2>
                <p class="text-muted" data-aos="zoom-out">	
                  "Kami berjuang untuk membantu orang-orang di Indonesia yang hendak memperdalam suatu bidang kelimuan untuk mencapai cita” nya (dream), membuat mereka merasa dihargai atas kemampuannya dengan memberikan pelatihan yang bernilai tinggi.
                  Kami senantiasa akan bertumbuh dalam komitmen untuk menjaga kualitas, integritas, dinamis dengan perkembangan yang sangat pesat saat ini, dan menggunakan analisis bisnis untuk lebih memahami tren pelanggan.
                  Kami sangat menghargai karyawan yang bekerja bersama kami, sebab kami percaya bahwa SDM adalah aset terbesar dan termahal dalam perusahaan."</p>
                <!--<a href="https://www.youtube.com/channel/UCTrtUE49kWsdvQ3lQczvrRA" target="_blank"><button class="btn btn-primary"><i
                    class="fas fa-play-circle me-2"></i>Our Channel</button></a>
                <!--<button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo"><i
                    class="fas fa-play-circle me-2"></i>Play Tutorial</button>-->
            </div>
            </div>
            
        </div>
        </section>
    </section>
    <section class="bg-top py-5"  style="background: url({!! asset('assets/img/testimonials-bg.png') !!}) no-repeat; background-size: cover">
        <div class="container">
        <p class="h6 text-uppercase text-primary" data-aos="fade-up">CHOOSE WHERE YOU’D LIKE TO BEGIN</p>
        <h2 class="mb-5" data-aos="fade-up">Promoted Workshop</h2>
        <div class="container">
          <div class="row pb-5 gy-4">
            @if($kursus->count() > 0)
              @foreach($kursus AS $key => $rows)
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-self-stretch" data-aos="zoom-in">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg">
                    <div class="card-header p-0 align-self-stretch">
                      <img src="{{ asset('storage/image/'.$rows->image) }}" class="card-img-top lazyload" loading=”lazy” alt="Card Image">
                    </div>
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title"><a href="{{ route('training.detail', Str::slug($rows->nama, '-')) }}">{{ $rows->nama; }}</a></h5>
                      <a href="{{ route('instructure.detail', $rows->kode_instruktur) }}" class="text-muted"><p class="card-text mb-4"><i class="fa-solid fa-user" style="color: #320B75;"></i> {{ $rows->instruktur->nama_instruktur }}</p></a>
                      <a href="{{ $rows->register }}" target="_blank" class="btn btn-primary btn-sm mt-auto align-self-start">Register</a>
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
            @else
              <div class="col-md-12">
                  <div class="card border-0 shadow rounded-lg text-start">
                    <div class="card-body text-center">
                      <p class="h5">Mohon maaf, untuk sementara waktu jadwal tidak tersedia...</p>
                    </div>
                  </div>
              </div>
            @endif
          </div>
        </div>
    </section>
    <section id="event" class="bg-top py-5 container">
    
    </section>
    <section class="bg-top p-0" id="contact-us" style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: 100% 100%; background-position: left center">
      <div class="container text-center">
        <p class="h6 text-uppercase text-primary" data-aos="fade-up">PEOPLE ARE PRAISING dilatih.co</p>
        <h2 class="mb-5" data-aos="fade-up">What Make They Love Us</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto" data-aos="zoom-out">
            <div class="swiper testimonials-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-3.jpg') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Kegiatan ini sangat bermanfaat untuk kami, oleh karena itu kami mengharapkan kiranya kegiatan-kegiatan serupa selalu di infokan kepada kami dan kiranya baget untu kegiatan tersebut di sesuaikan dgn peserta. Trimakasih</p>
                        <h5 class="mb-0"></h5>
                        <p class="text-primary mb-0 text-sm"></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide h-auto">
                  <div class="mx-3 mx-lg-5 my-5 pt-3">
                    <div class="card shadow rounded-lg px-4 py-5 px-lg-5 with-pattern bg-white border-0">
                      <div class="card-body index-forward pt-5 rounded-lg">
                        <div class="testimonial-img"><img class="rounded-circle" src="{!! asset('assets/img/avatar-3.jpg') !!}" alt="" width="100"/></div>
                        <p class="lead text-muted mb-5">Kegiatan pelatihan oleh Dilatih.co PT.Motekar Edukasi Indonesia ini sangat menarik dan banyak memberi manfaat bagi kami sebagai auditor, semoga berikutnya ada lagi sertifikasi sejenis yang bisa memberikan manfaat tambahan, semoga Dilatih.co PT.Motekar Edukasi Indonesia selalu sukses dimasa mendatang.</p>
                        <h5 class="mb-0"></h5>
                        <p class="text-primary mb-0 text-sm"></p>
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