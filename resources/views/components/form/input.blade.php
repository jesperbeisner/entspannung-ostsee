@props(['type', 'id', 'description'])
<label for="{{ $id }}"
       class="text-gray-700"
>
    {{ $description }}
</label>

<input type="{{ $type }}"
       id="{{ $id }}"
       name="{{ $id }}"
       class="bg-gray-50 block w-full rounded-md border-gray-300 shadow-sm focus:bg-white focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
>
