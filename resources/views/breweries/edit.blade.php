@extends('layouts.frontend')

@section('main-content')
  <h1>Edit brewery</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('breweries.update', $brewery->id) }}" 
        method="post">
    @include('breweries.form')
    <p>
      <button type="submit">Edit brewery</button>
    </p>
  </form>
@endsection