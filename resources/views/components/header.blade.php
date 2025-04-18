<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="d-flex align-items-center" style="width: 7%">
        <img src="assets/img/new_logo.jpg" alt="Damot">
      </a>

      <nav id="navmenu" class="navmenu">
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
      </nav>

    </div>
  </header>