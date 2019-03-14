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

    @if(Auth::check())
      <form action="{{ route('beers.addcomment', $beer->id) }}" method="POST">
        {{ csrf_field() }}
        <label for="review">Add review</label> <br>
        <textarea name="review" id="review" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Save review">
      </form>
    @endif

    <hr>
    
    @if($beer->reviews()->count())
      @foreach($beer->reviews as $review)
        <article>
          <cite>{{ $review->user->name }}</cite> : 
          {{ $review->text }}
        </article>
      @endforeach
    @else 
      <p>No reviews yet</p>
    @endif
    
  </section>
@endsection