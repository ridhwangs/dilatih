@extends('theme.default')
@section('content')
  <!-- Hero Section-->
    <section class="hero bg-top pt-5" id="hero" style="background: url({!! asset('assets/img/pattern-2.png') !!}) no-repeat; background-size: 100% 80%;">
        <div class="container pt-5">
        <div class="row" style="height:500px;">
           
            <div class="col-md-4">
                <div class="card border-0 mb-3" >
                    <div class="card-body">
                        <h5 class="card-title">Get Excited Already ?</h5>
                        <h1>Reach Me !</h1>
                        <b>Address</b>
                        <address>
                            Jalan Jenderal Sudirman km 7, Nomor 14A,
                            Kelurahan Bunut, Kecamatan Kapuas, Kabupaten Sanggau
                        </address>

                        <b>Contact</b>
                        <p class="mb-0">Mobile : 081234567890</p>
                        <p class="mb-0">Hotline : (021) 1234 - 5678</p>
                        <p class="mb-0">Mail : support@dilatih.com</p>
                    </div>
                </div>
            </div>
             <div class="col-md-8" style="background-image: url('{!! asset('assets/img/contact.svg') !!}');background-repeat:no-repeat;background-size:100%;background-position:center;">
            </div>
        </div>
        </div>
    </section>
    <section class="bg-top py-5"  style="background: url({!! asset('assets/img/banner-1.png') !!}) no-repeat; background-size: cover;">
      <div class="container">
        <h3 class="h3">Or Just Drop me a line</h3>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name (*)</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address (*)</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject (*)</label>
                <input type="text" class="form-control" id="subject" >
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message (*)</label>
                <textarea class="form-control" id="message" rows="8"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </section>
@endsection