<div class="col-md-3 mt-2">
    <label for=""><b>{{ $label }} : </b></label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-control">
        <option value="">Select a {{ $label }}</option>
        @foreach ($data as $row)
        <option value="{{ $row->id }}">{{ $row->name }}</option>
        @endforeach
    </select>
    @error("{{ $name }}")
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
