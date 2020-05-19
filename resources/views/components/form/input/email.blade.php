<div class="form-group row">
  <label for="{{ $name }}"
    class="col-md-2 col-form-label">{{ __(ucfirst($name)) }}</label>
  <div class="col-md-10">
    <input type="email" id="{{ $name }}" name="{{ $name }}"
      value="{{ $value ?? '' }}"
      class="form-control @error('title') is-invalid @enderror col-md-12 px-1" />

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
