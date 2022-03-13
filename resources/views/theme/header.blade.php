 <!-- navbar-->
<header class="header">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a href="{{ route('home') }}"><img src="{!! asset('assets/img/logo.svg') !!}" alt="" width="110"></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('training') }}">Training & Certification</a></li>
                <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('activity') }}">Our Activity</a></li>
                <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('instructure') }}">Our Instructors</a></li>
                <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('contact') }}">Contact Us</a></li>
                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link link-scroll text-white btn btn-danger btn-sm" href="{{ route('actionlogout') }}">Logout</a></li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
</header>