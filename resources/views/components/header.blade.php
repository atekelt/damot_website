<header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="AgriCulture">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
          <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a></li>
          <li><a href="/product" class="{{ request()->is('product') ? 'active' : '' }}">Products </a></li>
          <li><a href="/impact" class="{{ request()->is('impact') ? 'active' : '' }}">Sustainability & Impact</a></li>
          <li><a href="" class="{{ request()->is('export') ? 'active' : '' }}">Export & Logistics</a></li>
          <li><a href="" class="{{ request()->is('blog') ? 'active' : '' }}">Blogs</a></li>
          <li><a href="" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>