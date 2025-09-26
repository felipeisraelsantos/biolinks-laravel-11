@props(['name'])

<div>
    <input class="input input-bordered w-full" name="{{ $name }}" {{ $attributes }} />
    @error($name)
        <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</div>
