<input
    class="form-control @error('title') is-invalid @enderror col-md-12 px-1"
    type="time"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
/>
