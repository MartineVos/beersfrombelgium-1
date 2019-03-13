@extends('layouts.frontend')

@section('main-content')
  <h1>{{ $beer->name }}</h1>

  <p>
    <a href="{{ route('beers.edit', $beer->id) }}">Edit beer</a>
  </p>
  <p>
    <a href="{{ route('beers.delete', $beer->id) }}">Delete beer</a>
  </p>

  <p>
    Alcohol: {{ $beer->alcohol }}
  </p>
  <p>
    Score: {!! str_repeat('&bigstar;', $beer->score) !!}
  </p>
  @if ($beer->type)
  <p>
    Type: {{ $beer->type->name }}
  </p>
  @endif 
  @if ($beer->brewery)
  <p>
    Brewery: 
      <a href="{{ route('breweries.show', $beer->brewery->id) }}">
        {{ $beer->brewery->name }}
      </a>
  </p>
  @endif
@endsection

@section('sidebar')
  <section>
    <h1>Reviews</h1>
    <article>
      <cite>Dorien</cite> : 
      Dit drink ik niet zo graag.
    </article>
    <article>
      <cite>Martine</cite> : 
      De smaak is maar een beetje bitter!
    </article>
  </section>
@endsection