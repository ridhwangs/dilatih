@extends('theme.default')
@section('content')
  <!-- Hero Section-->

  <section class="bg-top py-5 pt-5"  style="background: url({!! asset('assets/img/banner-1.png') !!}) no-repeat; background-size: cover; ">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-8 mb-4">
              <div class="card border-0 rounded-lg" style="min-height:600px;">
                  <div class="card-header bg-white">
                    <h3 class="text-primary">{{ $detail->nama; }}</h3>
                    <span class="badge bg-primary">{{ $detail->kategori; }}</span>
                  </div>
                  <div class="card-body">
                    <img src="{{ asset('storage/image/'.$detail->image) }}" class="img-fluid mb-4 lazyload" loading=”lazy” alt="images">                   
                    {!! $detail->deskripsi; !!}
                  </div>
                  <div class="card-footer bg-white">
                      <small>{{ date('d F Y h:i A', strtotime($detail->created_at)); }}</small>
                  </div>
              </div>
          </div>
          <div class="col">
             <div class="card border-0 rounded-lg sticky-top">
                  <div class="card-body p-0">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <b>Instruktur Pelatihan : </b>
                          <a href="{{ route('instructure.detail', $detail->kode_instruktur) }}" class="text-primary"><p class="card-text mb-4"> {{ $detail->instruktur->nama_instruktur }}</p></a>
                        </li>
                        <li class="list-group-item ">
                          <b>Waktu : </b>
                          
                            @if(date('Y-m-d', strtotime($detail->date_start)) == date('Y-m-d', strtotime($detail->date_end)))
                              <p class="mb-0 text-muted">{{ date('d F Y', strtotime($detail->date_start))}}</p>
                              <p class="mb-0 text-muted">{{ date('h:i A', strtotime($detail->date_start))}} - {{ date('h:i A', strtotime($detail->date_end))}}</p>
                            @else
                              <p class="mb-0 text-muted">{{ date('d F Y h:i A', strtotime($detail->date_start))}}</p>
                              <p class="mb-0 text-muted">{{ date('d F Y h:i A', strtotime($detail->date_end))}}</p>
                            @endif
                         
                        </li>
                        <li class="list-group-item">
                          <b>Jenis : </b>
                          <p class="text-muted">{{ $detail->jenis; }}</p>
                        </li>
                        <li class="list-group-item">
                          <b>Biaya : </b>
                          <p class="text-end h4">
                             @if($detail->biaya == 0)
                              Free
                            @else
                               Rp. {{ number_format($detail->biaya) }}
                            @endif
                        </li>
                        <li class="list-group-item">
                          <a href="{{ $detail->register; }}" class="btn btn-primary btn-sm col-12">Register</a>
                        </li>
                      </ul>
                  </div>
                  
              </div>
          </div>
        </div>
      
      </div>
  </section>

  <script>
     $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll > 200) {
            $("#info").addClass("addMargin");
        } else {
            $("#info").removeClass("addMargin");
        }
    });
  </script>
@endsection