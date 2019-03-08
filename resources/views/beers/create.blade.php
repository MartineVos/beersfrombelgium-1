@extends('layouts.frontend')

@section('main-content')
  <h1>Add new beer</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('beers.store') }}" 
        method="post">
    @include('beers.form')
    <p>
      <button type="submit">Add new beer</button>
    </p>
  </form>
@endsection