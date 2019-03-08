@extends('layouts.frontend')

@section('main-content')
  <h1>A list of beers</h1>

  <p>
    <a href="{{ route('beers.create') }}">Add new beer</a>
  </p>

  @foreach($beers as $beer)
    @include('beers.teaser')
  @endforeach
@endsection

@section('sidebar')
  @include('beers.popular')
@endsection