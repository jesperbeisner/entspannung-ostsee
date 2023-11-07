@props(['type', 'id', 'description', 'value' => null, 'placeholder' => null])
<label for="{{ $id }}" class="text-gray-700">
    {{ $description }}
</label>

<input type="{{ $type }}"
       id="{{ $id }}"
       name="{{ $id }}"
       class="block w-full rounded-md bg-gray-50 @error($id) border-red-300 @else border-gray-300 @enderror focus:border-indigo-400 focus:ring-indigo-200 focus:ring-2"
       @if($value !== null) value="{{ $value }}" @endif
       @if($placeholder !== null) placeholder="{{ $placeholder }}" @endif
>

@error($id)
    <small class="text-red-500">{{ $message }}</small>
@enderror
