@extends('layouts.frontend')

@section('main-content')
  <h1>{{ $brewery->name }}</h1>

  <p>
    <a href="{{ route('breweries.edit', $brewery->id) }}">Edit brewery</a>
  </p>
  <p>
    <a href="{{ route('breweries.delete', $brewery->id) }}">Delete brewery</a>
  </p>

  <p>
    {{ $brewery->description }}
  </p>

  <hr>
  <h3>Beers brewed here:</h3>
  <ul>
    @foreach($brewery->beers as $beer) 
      <li>
        <a href="{{ route('beers.show', $beer->id) }}">
          {{ $beer->name }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection