<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="d-flex align-items-center img-fluid" style="width: 7%">
        <img src="{{ asset('assets/img/new_logo.jpg') }}" alt="Damot" class="img-fluid">
    </a>

      {{-- <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
          <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Products </a></li>
          <li><a href="{{ url('/impact') }}" class="{{ request()->is('impact') ? 'active' : '' }}">Sustainability & Impact</a></li>
          <li><a href="{{ url('/export') }}" class="{{ request()->is('export') ? 'active' : '' }}">Export & Logistics</a></li>
          <li><a href="#" class="{{ request()->is('blog') ? 'active' : '' }}">Blogs</a></li>
          <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav> --}}
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
          <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Products </a></li>
          <li><a href="{{ url('/impact') }}" class="{{ request()->is('impact') ? 'active' : '' }}">Sustainability & Impact</a></li>
          <li><a href="{{ url('/export') }}" class="{{ request()->is('export') ? 'active' : '' }}">Export & Logistics</a></li>
          <li><a href="{{ route('blogs.index') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blogs</a></li>
          <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
      
          @auth
            <!-- Profile page link -->
            <li><a href="{{ route('profile.edit') }}" class="{{ request()->is('profile') ? 'active' : '' }}">Profile</a></li>
      
            <!-- Logout -->
            <li>
              <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="nav-link btn btn-link text-danger" style="padding: 0; margin: 0; border: none; background: none;">
                  Logout
                </button>
              </form>
            </li>
          @else
            <!-- Login -->
            <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">Login</a></li>
          @endauth
        </ul>
      
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
      
    </div>
  </header>