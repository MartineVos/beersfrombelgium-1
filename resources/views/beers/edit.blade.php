@extends('layouts.frontend')

@section('main-content')
  <h1>Edit beer</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('beers.update', $beer->id) }}" 
        method="post">
    @include('beers.form')
    <p>
      <button type="submit">Edit beer</button>
    </p>
  </form>
@endsection