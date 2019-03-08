{{ csrf_field() }} 
<p>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" 
      value="{{ old('name', $brewery->name) }}">
  @if($errors->has('name'))
    <span class="error">
      {{ $errors->first('name') }}
    </span>
  @endif
</p>
<p>
  <label for="description">Description:</label>
  <textarea name="description" id="" cols="30" rows="10">{{ old('description', $brewery->description) }}</textarea>
  @if($errors->has('description'))
    <span class="error">
      {{ $errors->first('description') }}
    </span>
  @endif
</p>