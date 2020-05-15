<input
    class="form-control-sm @error('title') is-invalid @enderror col-md-1 px-1"
    type="checkbox"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ $value ?? ''}}"
    @if(!!$value) checked @endif
/>
