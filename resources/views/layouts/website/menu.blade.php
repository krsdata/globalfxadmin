<!-- ==========Overlay========== -->
<div class="overlay">
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>
</div>
<!-- ==========Overlayend========== -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="website/images/justkhelologo.svg" width="150" alt="">
        </a>
          @if (!isset($is_mobile)) 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item {{ (request()->path()  == '/') ? 'active' : '' }} ">
                    <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->path()  == 'about-us') ? 'active' : '' }}" href="{{ url('/about-us')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->path()  == 'just-khelo-download-app') ? 'active' : '' }} " href="{{ url('/just-khelo-download-app')}}">How to Install</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->path()  == 'how-to-play') ? 'active' : '' }}" href="{{ url('/how-to-play')}}">How to Play</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->path()  == 'contact-us') ? 'active' : '' }}" href="{{ url('/contact-us')}}">Help</a>
                </li>


            </ul>

        </div>
        @endif
    </div>
</nav>


