<header class="header-top bg-grey justify-content-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2 col-md-4 text-center d-none d-lg-block">
          <a class="navbar-brand " href="{{ route("home") }}">
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
          </a>
      </div>

      <div class="col-lg-8 col-md-12">
        <nav class="navbar navbar-expand-lg navigation-2 navigation">
          <a class="navbar-brand text-uppercase d-lg-none" href="{{ route("home") }}">
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="ti-menu"></span>
            </button>

              <div class="collapse navbar-collapse" id="navbar-collapse">
                  <ul id="menu" class="menu navbar-nav mx-auto">
                      <li class="nav-item"><a href="{{ route("home") }}" class="nav-link">Home</a></li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Blog Posts
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{ route("full") }}">Standard Fullwidth</a>
                            <a class="dropdown-item" href="{{ route("right") }}">Standard Right Sidebar</a>
                            <a class="dropdown-item" href="{{ route("left") }}">Standard Left Sidebar</a>
                          </div>
                      </li>

                      <li class="nav-item"><a href="{{ route("about") }}" class="nav-link">About</a></li>
                      <li class="nav-item"><a href="{{ route("category") }}" class="nav-link">Category</a></li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Post Format
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{ route("video") }}">Video Formats</a>
                            <a class="dropdown-item" href="{{ route("audio") }}">Audio Format</a>
                            <a class="dropdown-item" href="{{ route("quote") }}">Quote Format</a>
                            <a class="dropdown-item" href="{{ route("gallery") }}">Gallery Format</a>
                            <a class="dropdown-item" href="{{ route("image") }}">Image Format</a>
                          </div>
                      </li>

                      <li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Contact</a></li>
                  </ul>

                  <ul class="list-inline mb-0 d-block d-lg-none">
                    <li class="list-inline-item"><a href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://x.com/twitt_login?lang=en"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/login"><i class="ti-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://in.pinterest.com/login/"><i class="ti-pinterest"></i></a></li>
                  </ul>
              </div>
          </nav>
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <div class="header-socials-2 text-right d-none d-lg-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="https://www.facebook.com/"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a href="https://x.com/twitt_login?lang=en"><i class="ti-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/login"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="https://in.pinterest.com/login/"><i class="ti-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</header>
