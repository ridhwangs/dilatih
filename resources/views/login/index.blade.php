@extends('theme.default')
@section('content')
<section class="hero bg-top py-5" id="hero" style="background: url({!! asset('assets/img/banner-4.png') !!}) no-repeat; background-size: 100% 80%">
        <div class="container py-5">
        <div class="col-md-4 col-md-offset-4">
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="" autofocus>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-3">Log In</button>
            </form>
        </div>
    </div>
  </section>
  
@endsection