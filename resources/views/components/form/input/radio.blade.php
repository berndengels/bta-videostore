<div class="form-group row">
  <label for="{{ $name }}"
    class="col-md-2 col-form-label">{{ __(ucfirst($name)) }}</label>
  <div class="col-md-10">
    <div class="col-md-12">
      <!-- baue options per blade function -->
      @foreach($options as $index => $option)
        <div class="form-check">
          <input class="form-check-input" type="radio" name="{{ $name }}"
            id="{{ $name }}_{{ $index }}" value="{{ $index }}">
          <label class="form-check-label" for="{{ $name }}_{{ $index }}">
            {{ $option }}
          </label>
        </div>
      @endforeach
    </div>

    <span class="d-block text-info">
      <strong>{{ $msg ?? '' }}</strong>
    </span>

    @error($name)
    <span class="d-block invalid-feedback" role="alert">
      <strong>{{ $errors->first($name) }}</strong>
    </span>
    @enderror
  </div>
</div>
