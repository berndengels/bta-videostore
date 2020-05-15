<input
    type="email"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
    class="form-control @error('title') is-invalid @enderror col-md-12 px-1"
/>
