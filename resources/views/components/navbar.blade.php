<nav class="navbar">
  <div class="navbar-top">
    <img src="{{ asset('asset/logo.jpg') }}" alt="Logo">
    <span class="site-title">Seashell Jewelry and Handicraft</span>
  </div>

  <div class="hamburger" id="hamburger">&#9776;</div>

  <div class="navbar-bottom" id="navbar-menu">
    <ul class="navbar-menu">
      <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
      <li><a href="/profile" class="{{ Request::is('profile') ? 'active' : '' }}">PROFILE</a></li>
      <li><a href="/catalogue" class="{{ Request::is('catalogue') ? 'active' : '' }}">CATALOGUE</a></li>
      <li><a href="/term-conditions" class="{{ Request::is('term-conditions') ? 'active' : '' }}">TERM CONDITIONS</a></li>
      <li><a href="/bank-account" class="{{ Request::is('bank-account') ? 'active' : '' }}">BANK ACCOUNT</a></li>
      <li><a href="/your-chart" class="{{ Request::is('your-chart') ? 'active' : '' }}">YOUR CHART(0)</a></li>
      <li><a href="/our-video" class="{{ Request::is('our-video') ? 'active' : '' }}">OUR VIDEO</a></li>
      <li><a href="/contact-us" class="{{ Request::is('contact-us') ? 'active' : '' }}">CONTACT US</a></li>
    </ul>

    <div class="search-box">
      <form action="#" method="GET">
        <input type="text" name="search" placeholder="search">
        <button type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>