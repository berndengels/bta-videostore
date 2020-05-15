<input
    class="form-inline d-inline-block @error('title') is-invalid @enderror"
    type="radio"
    id="{{ $value }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
    @if(!!$checked) checked @endif
/>
