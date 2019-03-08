@extends('layouts.frontend')

@section('main-content')
  <h1>Delete beer: {{ $beer->name }}</h1>


  <form action="{{ route('breweries.destroy', $beer->id) }}" 
        method="post">
        {{ csrf_field() }}
    <p>
      <button type="submit">Are you sure?</button>
      <a href="{{ route('breweries.show', $beer->id) }}">Cancel</a>
    </p>
  </form>
@endsection