<article class="beer-teaser">
  <h1>{{ $beer->name }}</h1>
  <p>
    {{ $beer->alcohol }}% 
    / {!! str_repeat('&bigstar;', $beer->score) !!}
  </p>
  <a href="{{ route('beers.show', $beer->id) }}">
    <span>&raquo;</span>
  </a>
</article>