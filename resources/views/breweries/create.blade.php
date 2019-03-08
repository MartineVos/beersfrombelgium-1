@extends('layouts.frontend')

@section('main-content')
  <h1>Add new brewery</h1>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <form action="{{ route('breweries.store') }}" 
        method="post">
    @include('breweries.form')
    <p>
      <button type="submit">Add new brewery</button>
    </p>
  </form>
@endsection