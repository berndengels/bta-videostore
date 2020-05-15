<textarea
    class="form-control @error('title') is-invalid @enderror col-md-12 px-1"
    cols="50"
    rows="6"
    id="{{ $name }}"
    name="{{ $name }}"
>{{ $value ?? ''}}</textarea>

