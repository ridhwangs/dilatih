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
                        <h1 class="text-primary">Reach Me !</h1>
                        <b>Address</b>
                        <address>
                            Jl. Bandung Tempo Dulu No.17<br>
                            Kotabaru Parahyangan <br>
                            Kabupaten Bandung Barat <br>
                            Jawa Barat 40553
                            
                        </address>

                        <b>Contact</b>
                        <a href="https://wa.me/083107886622" target="_blank"><p class="mb-0">Mobile : 083107886622</p></a>
                        <a href="https://www.instagram.com/dilatih.co" target="_blank"><p class="mb-0">Instagram : dilatih.co</p></a>
                        <a href="mailto:info@dilatih.co" target="_blank"><p class="mb-0">Mail : info@dilatih.co</p></a>
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
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
           {{ $message }}
        </div>
        @else
    <h3 class="h3 text-primary">Or Just Drop me a line</h3>
        @if($errors->any())
            {!! implode('', $errors->all('
            <div class="alert alert-danger" role="alert">
                :message
            </div>
            ')) !!}
        @endif
            <form action="{{ route('contact.store') }}" id="form" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name (*)</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address (*)</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject (*)</label>
                    <input type="text" class="form-control" name="subject" id="subject" >
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message (*)</label>
                    <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                </div>
                <button type="submit" form="form" class="btn btn-primary">Submit</button>
            </form>
        @endif
        
      </div>
    </section>
@endsection