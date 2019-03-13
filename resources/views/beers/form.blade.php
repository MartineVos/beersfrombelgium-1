{{ csrf_field() }} 
<p>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" 
      value="{{ old('name', $beer->name) }}">
  @if($errors->has('name'))
    <span class="error">
      {{ $errors->first('name') }}
    </span>
  @endif
</p>
<p>
  <label for="alcohol">Alcohol:</label>
  <input type="text" id="alcohol" name="alcohol" 
        value="{{ old('alcohol', $beer->alcohol) }}">
  @if($errors->has('alcohol'))
    <span class="error">
      {{ $errors->first('alcohol') }}
    </span>
  @endif
</p>
<p>
  <label for="type">Type:</label>
  <select name="type" id="type">
    <option value="">Please choose...</option>
    @foreach(App\Type::all() as $type)
      <option
          {{ $beer->type_id==$type->id ? 'selected':'' }}
          value="{{ $type->id }}"
      >
        {{ $type->name }}
      </option>
    @endforeach
  </select>
</p>
<p>
  <label for="brewery">Brewery:</label>
  <select name="brewery" id="brewery">
    <option value="">Please choose...</option>
    @foreach(App\Brewery::all() as $brewery)
      <option
          {{ $beer->brewery_id==$brewery->id ? 'selected':'' }} 
          value="{{ $brewery->id }}"
      >
        {{ $brewery->name }}
      </option>
    @endforeach
  </select>
</p>