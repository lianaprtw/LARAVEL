<nav class="navbar">
  <div class="navbar-top">
    <img src="{{ asset('asset/logo.jpg') }}" alt="Logo">
    <span class="site-title">Seashell Jewelry and Handicraft</span>
  </div>

  <div class="hamburger" id="hamburger">&#9776;</div>

  <div class="navbar-bottom" id="navbar-menu">
    <ul class="navbar-menu">
      <li><a href="{{ url('/') }}">HOME</a></li>
      <li><a href="{{ url('/profile') }}">PROFILE</a></li>
      <li><a href="{{ url('/catalogue') }}">CATALOGUE</a></li>
      <li><a href="{{ url('/terms') }}">TERM CONDITIONS</a></li>
      <li><a href="{{ url('/contact') }}">BANK ACCOUNT</a></li>
      <li><a href="{{ url('/contact') }}">YOUR CHART(0)</a></li>
      <li><a href="{{ url('/contact') }}">OUR VIDEO</a></li>
      <li><a href="{{ url('/contact') }}">CONTACT US</a></li>
    </ul>

    <div class="search-box">
      <form action="#" method="GET">
        <input type="text" name="search" placeholder="search">
        <button type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>