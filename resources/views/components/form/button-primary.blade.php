@props(['type', 'id', 'description'])
<button type="{{ $type }}"
        id="{{ $id }}"
        class="text-white px-4 py-2 text-center rounded-lg bg-indigo-500 hover:bg-indigo-700 focus:ring focus:outline-none focus:ring-indigo-200"
>
    {{ $description }}
</button>
