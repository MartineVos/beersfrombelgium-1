<nav>
  <a href="{{ route('home') }}">Beers</a>
  <a href="{{ route('breweries.index') }}">Breweries</a>
  <a href="#">Contact</a>
  @if (Auth::check())
    <a href="{{ route('logout') }}">Logout</a>
  @else
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
  @endif
</nav>