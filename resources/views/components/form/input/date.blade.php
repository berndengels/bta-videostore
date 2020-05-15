<input
    class="form-control @error('title') is-invalid @enderror col-md-12 px-1"
    type="date"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
/>
