<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" ><img src="{{url('images/logo6.PNG')}}" style=" width:140px; height:100px;"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="room.html">Rooms</a>
                  <a class="dropdown-item" href="room.html">Superior Room Twin</a>
                  <a class="dropdown-item" href="room.html">Premier Suite</a>
                  <a class="dropdown-item" href="room.html">Family Room</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{ route('hotel.index') }}" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="{{route('facilities')}}" class="nav-link">Facilities</a></li>
            <li class="nav-item"><a href="{{route('reserve')}}" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="{{route('dining')}}" class="nav-link">Dining</a></li>
            <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            @auth
            @if(Auth::user()->is_admin)
            <li class="nav-item"><a class="admin">Admin</a></li>
            @endif
            <li class="nav-item"><a class="auth-name" href="{{route('home')}}">&nbsp {{ Auth::user()->name}}</a></li>
            <li>
            <form method= "post" action= "{{ route ('logout')}}">
            @csrf 
            <button class ="logout-btn" ><i class="fa fa-power-off"></i>&nbsp LOGOUT</button>
            </li>
            @else
            <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{ url('images/lobby2.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
              <h1 class="mb-3">@yield('page_title', 'Title')</h1>
            </div>
          </div>
        </div>
      </div>
    </section>