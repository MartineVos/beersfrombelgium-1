@extends('layouts.frontend')

@section('main-content')
  <h1>Register</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('register.post') }}" method="POST">
    {{ csrf_field() }}
    <p>
      <label for="name">Name:</label> <br>
      <input type="name" name="name" id="name">
    </p>
    <p>
      <label for="email">Email:</label> <br>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label for="password">Password</label> <br>
      <input type="password" name="password" id="password">
    </p>
    <p>
      <label for="password_confirmation">Confirm Password</label> <br>
      <input type="password" name="password_confirmation" id="password_confirmation">
    </p>
    <p>
      <input type="submit" value="Register"> 
      or <a href="{{ route('login') }}">login</a>
    </p>
  </form>
@endsection