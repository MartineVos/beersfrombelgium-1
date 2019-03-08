@extends('layouts.frontend')

@section('main-content')
  <h1>A list of breweries</h1>

  <p>
    <a href="{{ route('breweries.create') }}">Add new brewery</a>
  </p>

  @foreach($breweries as $brewery)
    @include('breweries.teaser')
  @endforeach
@endsection