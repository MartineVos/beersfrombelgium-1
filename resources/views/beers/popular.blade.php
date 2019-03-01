@inject('beers', 'App\Beer')

<section>
  <h1>Most popular beers</h1>
  <ul>
    @foreach($beers->popular() as $beer)
      <li>
        <a href="{{ route('beers.show', $beer->id) }}">
          {{ $beer->name }}
        </a>
      </li>
    @endforeach
  </ul>
</section>