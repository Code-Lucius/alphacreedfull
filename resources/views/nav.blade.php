
<nav class="navbar navbar-expand-lg bg-body-tertiary montserrat-alphatextfont">
        <div class="container-fluid">
          <a class="navbar-brand ms-5 mt-2" href="{{url('/')}}">Alpha Creed</a>
          <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-3">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'current' : '' }}" aria-current="page" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('blog') ? 'current' : '' }}" href="{{url('/blog')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('contact') ? 'current' : '' }}" href="{{url('/contact')}}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
</nav>