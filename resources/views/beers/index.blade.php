@extends('layouts.frontend')

@section('main-content')
  <h1>A list of beers</h1>
  @foreach($beers as $beer)
    @include('beers.teaser')
  @endforeach
@endsection

@section('sidebar')
  <section>
    <h1>Most popular beers</h1>
    <ul>
      @foreach($popular_beers as $beer)
        <li>
          <a href="{{ route('beers.show', $beer->id) }}">
            {{ $beer->name }}
          </a>
        </li>
      @endforeach
    </ul>
  </section>
@endsection