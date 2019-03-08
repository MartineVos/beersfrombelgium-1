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