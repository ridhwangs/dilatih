@extends('theme.default')
@section('content')
  <!-- Hero Section-->
  <section class="bg-top py-5 pt-5"  style="background: url({!! asset('assets/img/banner-2.png') !!}) no-repeat; background-size: cover; min-height:50vh;">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Profile</button>
                <button class="nav-link" id="nav-activity-tab" data-bs-toggle="tab" data-bs-target="#nav-activity" type="button" role="tab" aria-controls="nav-activity" aria-selected="false">My Activity</button>
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card border-0 rounded-lg">
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
              <div class="tab-pane fade" id="nav-activity" role="tabpanel" aria-labelledby="nav-activity-tab">
                <div class=" border-0 rounded-lg">
                  <div class="p-2">
                        <div class="row">
                          @if($kursus->count() > 0)
                          @foreach($kursus AS $key => $rows)
                            <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-self-stretch mb-3" data-aos="fade-up">
                             
                                <div class="card border-0 shadow rounded-lg">
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
                                                    
                                                    <div class="d-flex flex-column">
                                                      <h6>
                                                      @if($rows->status == 1)
                                                        <a href="{{ route('training.detail', Str::slug($rows->nama, '-')) }}">{{ $rows->nama }}</a>
                                                      @else
                                                        <a href="{{ route('activity.detail', Str::slug($rows->nama, '-')) }}">{{ $rows->nama }}</a>
                                                      @endif
                                                    </h6>
                                                    <span style="margin-right:8px;">
                                                      @if(date('Y-m-d', strtotime($rows->date_start)) == date('Y-m-d', strtotime($rows->date_end)))
                                                      {{ date('d', strtotime($rows->date_start)) }} {{ date('F', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                                                      @elseif(date('Y-m', strtotime($rows->date_start)) == date('Y-m', strtotime($rows->date_end)))
                                                      {{ date('d', strtotime($rows->date_start)) }} - {{ date('d', strtotime($rows->date_end)) }} {{ date('F', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                                                      @else
                                                        {{ date('d F', strtotime($rows->date_start)) }} - {{ date('d F', strtotime($rows->date_end)) }}  {{ date('Y', strtotime($rows->date_end)) }}
                                                      @endif
                                                    </span>
                                                    @if($rows->status == 1)
                                                      <a href="{{ $rows->register }}" target="_blank" class="btn btn-primary btn-sm mt-auto align-self-start">Register</a>
                                                    @endif
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                          <div class="col-md-12 d-flex justify-content-center"> {!! $kursus->links() !!} </div>
                          @else
                             <p class="h5">Untuk sementara jadwal tidak tersedia...</p>
                          @endif
                        </div>
                      </div>
                  </div>
                </div>
            </div>
         
          </div>
        </div>
      
      </div>
  </section>
@endsection