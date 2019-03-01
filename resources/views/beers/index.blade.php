@extends('layouts.frontend')

@section('main-content')
  <h1>A list of beers</h1>
  @foreach($beers as $beer)
    @include('beers.teaser')
  @endforeach
@endsection

@section('sidebar')
  @include('beers.popular')
@endsection