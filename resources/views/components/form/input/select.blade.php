<select
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
    class="form-control @error('title') is-invalid @enderror col-md-12"
>
    <option value="">Bitte wählen</option>
    <!-- baue options per blade function -->
    @foreach($options as $index => $option)
        @if($value == $index)
            <option value="{{ $index }}" selected="selected">{{ $option }}</option>
        @else
            <option value="{{ $index }}">{{ $option }}</option>
        @endif
    @endforeach
</select>
