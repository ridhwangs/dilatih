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
            @if(Auth::check())
            <div class="col-12">
                <a href="{{ route('training.create') }}" class="btn btn-primary col-md-12">New Post Training</a>
            </div>
            @endif
            @if($kursus->count() > 0)
              @foreach($kursus AS $key => $rows)
                <div class="col-lg-4 col-md-6">
                  <!-- Services Item-->
                  <div class="card border-0 shadow rounded-lg text-start" onclick="window.location.href = '{{ route('training.detail', Str::slug($rows->nama, '-')) }}';" style="min-height:430px; cursor: pointer;">
                      <img src="{{ asset('storage/image/'.$rows->image) }}" class="card-img-top">
                      <div class="card-body mb-0 p-3">
                      <h3 class="h6 my-2"><a href="{{ route('training.detail', Str::slug($rows->nama, '-')) }}">{{ $rows->nama; }}</a></h3>
                      <ul class="list-group list-group-horizontal">
                          <li class="list-group-item p-0 border-0">
                            <i class="fa-solid fa-globe"></i> {{ $rows->jenis }}
                          </li>
                      </ul>
                      </div>
                      <div class="card-footer bg-white">
                      <div class="d-flex justify-content-between">
                          <div>
                          <i class="fa-solid fa-calendar"></i> 
                          @if(date('Y-m-d', strtotime($rows->date_start)) == date('Y-m-d', strtotime($rows->date_end)))
                           {{ date('d', strtotime($rows->date_start)) }} - {{ date('d', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                          @elseif(date('Y-m', strtotime($rows->date_start)) == date('Y-m', strtotime($rows->date_end)))
                           {{ date('d', strtotime($rows->date_start)) }} - {{ date('d', strtotime($rows->date_end)) }} {{ date('F', strtotime($rows->date_end)) }} {{ date('Y', strtotime($rows->date_end)) }}
                          @else
                            {{ date('d F', strtotime($rows->date_start)) }} - {{ date('d F', strtotime($rows->date_end)) }}  {{ date('Y', strtotime($rows->date_end)) }}
                          @endif
                         
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
                      <p class="h5">Mohon maaf, untuk sementara waktu jadwal tidak tersedia...</p>
                    </div>
                  </div>
              </div>
            @endif
        </div>
      </div>
  </section>
@endsection