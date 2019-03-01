@extends('layouts.frontend')

@section('main-content')
  <h1>{{ $beer->name }}</h1>
  <p>
    Alcohol: {{ $beer->alcohol }}
  </p>
  <p>
    Score: {!! str_repeat('&bigstar;', $beer->score) !!}
  </p>
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