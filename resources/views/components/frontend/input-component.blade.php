<div class="col-md-3">
    <label for=""><b>{{ $label }} : </b></label>
    <input type="{{ $name }}" class="form-control" name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $name }}">
    @error("{{ $name }}")
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
