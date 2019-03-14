@extends('layouts.frontend')

@section('main-content')
  <h1>Login</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('login.post') }}" method="POST">
    {{ csrf_field() }}
    <p>
      <label for="email">Email:</label> <br>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label for="password">Password</label> <br>
      <input type="password" name="password" id="password">
    </p>
    <p>
      <input type="submit" value="Login">
      or <a href="{{ route('register') }}">register as new user</a>
    </p>
  </form>
@endsection