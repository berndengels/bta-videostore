@if($type === 'radio')
    <div class="d-inline-block mr-5">
        <div class="d-inline-block">
            @php
                $component = "components.form.input.$type"
            @endphp
            @include($component, [
                'name'  => $name,
                'value' => $value,
            ])
            <label for="{{ $value }}" class="d-inline-block form-check-label ml-2">{{ ucfirst($value) }}</label>

            @error($name)
            <span class="d-block invalid-feedback" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
            @enderror
        </div>
    </div>
@else
    <div class="form-group row">
        <label for="{{ $name }}" class="col-md-2 col-form-label">{{ __(ucfirst($name)) }}</label>
        <div class="col-md-10">
            @php
                $component = "components.form.input.$type"
            @endphp
            @include($component, [
                'name'  => $name,
                'value' => $value,
            ])
            @error($name)
            <span class="d-block invalid-feedback" role="alert">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
            @enderror
        </div>
    </div>
@endif
