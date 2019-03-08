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
@endsection