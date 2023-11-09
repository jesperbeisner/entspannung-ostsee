@props(['route', 'description'])

<a class="text-white inline-flex items-center px-4 py-3 md:py-3 md:px-6 text-center rounded-lg bg-indigo-500 hover:bg-indigo-700 focus:ring focus:outline-none focus:ring-indigo-200" href="{{ $route }}">
    {{ $description }}
    {{ $slot }}
</a>
