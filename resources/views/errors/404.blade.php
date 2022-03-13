@extends('theme.default')
@section('content')
@php
    $short_url = \App\Models\Link::where('keyword', Request::segment(1))->first();
@endphp
@if(!empty($short_url))

<section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%; min-height:55vh;">
        <div class="container py-5">
            <div class="pt-4">
                @if($short_url->kategori == 'zoom')
                    <div class="alert alert-primary text-center">
                        @if($short_url->status == 1)
                        <h4>Zoom segera dimulai</h4>
                        <p id="countdown"></p>
                        @else
                        <h4>Mohon menunggu</h4>
                        <p>zoom meeting akan dibuka 30 menit setelah acara</p>
                        @endif
                       
                    </div>
                @elseif($short_url->kategori == 'drive')
                    <div class="alert alert-primary text-center">
                        @if($short_url->status == 1)
                        <h4>Silahkan mendownload materi yang telah kami sediakan</h4>
                        <p><i class="fas fa-link"></i> <a href="{!! $short_url->link !!}" target="_blank">Klik disini untuk membuka halaman materi</a></p>     
                        @else
                        <h4>Mohon menunggu</h4>
                        <p>Materi akan segera disiapkan</p>
                        @endif
                    </div>
                @elseif($short_url->kategori == 'youtube')
                    <div class="alert alert-primary text-center">
                        @if($short_url->status == 1)
                        <h4>Silahkan menonton rekaman webinar yang telah disediakan</h4>
                        <p>jangan lupa like dan subscribe ya</p>
                        <p id="countdown"></p>
                        @else
                        <h4>Mohon menunggu</h4>
                        <p>Video akan segera disiapkan</p>
                        @endif
                        
                    </div>
                 @elseif($short_url->kategori == 'registrasi')
                    <div class="alert alert-primary text-center">
                        @if($short_url->status == 1)
                        <h4>Silahkan isi Form Registrasi</h4>
                         <p><i class="fas fa-link"></i> <a href="{!! $short_url->link !!}" target="_blank">Klik disini untuk membuka halaman form registrasi</a></p>
                        @else
                        <h4>Mohon menunggu</h4>
                        <p>Registrasi akan segera disiapkan</p>
                        @endif
                        
                    </div>
                @else
                @endif
                @if($short_url->status == 0)
                <video width="100%" playsinline autoplay muted loop id="myVideo">
                    <source src="{!! asset('assets/video/profile.mp4') !!}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                @endif
            </div>
        </div>
</section>
<script type="text/javascript">
        validasiStatus();
        var status = "{{request()->get('status')}}";
        var intervalId = setInterval(function() {
            // location.reload();     
            validasiStatus();
        }, 10000);

        function validasiStatus() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '{{ route('status.link','') }}/' + "{{ $short_url->keyword }}",
                data: {
                    _token: CSRF_TOKEN
                },
                type: 'GET',
                dataType: 'json',
            })
            .done(function (data) {
                if(data.status == 1){
                    clearInterval(intervalId);
                    if(status != "ready"){
                        location.replace(window.location.href + "?status=ready");
                    }else if((data.kategori != "drive") || (data.kategori != "registrasi")){
                        var timeleft = 5;
                        var waitingTimer = setInterval(function(){
                            if(timeleft <= 0){
                                clearInterval(waitingTimer);
                                window.location.replace("{{ $short_url->link }}")
                            }else{
                                document.getElementById("countdown").innerHTML = timeleft + " second remaining";
                            }
                            timeleft -= 1;
                        }, 1000);
                    }
                }
                console.log(data.status);
            })
            .fail(function (data) {
                console.log(data);
            });
        }
</script>
@else
<section class="hero bg-top py-5 pt-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%; ">
        <div class="container py-5 text-center ">
                 <h1 class="pt-5">Oops! Error 404 not found.</h1>
                <p>The page you were looking for doesn't exist.</p>
          
        </div>
</section>
@endif
@endsection