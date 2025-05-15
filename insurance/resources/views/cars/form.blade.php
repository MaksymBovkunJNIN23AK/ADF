@php
    $car = $car ?? null;
@endphp

<div class="form-group mb-2">
    <label for="reg_number">Registration Number</label>
    <input type="text" name="reg_number" class="form-control" value="{{ old('reg_number', $car->reg_number ?? '') }}" required>
</div>

<div class="form-group mb-2">
    <label for="brand">Brand</label>
    <input type="text" name="brand" class="form-control" value="{{ old('brand', $car->brand ?? '') }}" required>
</div>

<div class="form-group mb-2">
    <label for="model">Model</label>
    <input type="text" name="model" class="form-control" value="{{ old('model', $car->model ?? '') }}" required>
</div>

<div class="form-group mb-2">
    <label for="year">Year</label>
    <input type="number" name="year" class="form-control" value="{{ old('year', $car->year ?? '') }}" min="1900" max="{{ date('Y') }}" required>
</div>

<div class="form-group mb-3">
    <label for="owner_id">Owner</label>
    <select name="owner_id" class="form-control" required>
        @foreach ($owners as $owner)
            <option value="{{ $owner->id }}"
                {{ old('owner_id', $car->owner_id ?? $owner_id ?? '') == $owner->id ? 'selected' : '' }}>
                {{ $owner->name }} {{ $owner->surname }}
            </option>
        @endforeach
    </select>
</div>
