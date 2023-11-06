<header class="flex justify-center w-full border-b shadow-sm bg-blue-50 py-2">
    <div class="flex flex-col w-full md:flex-row md:max-w-screen-md md:justify-between">
        <div class="flex flex-col items-center md:flex-row">
            <a href="{{ route('index') }}">
                <img class="h-auto w-28 lg:w-40 rounded" width="960" height="524" src="{{ asset('img/segelboote-auf-dem-wasser.png') }}" alt="www.entspannung-ostsee Logo. Segelboote auf dem Wasser.">
            </a>

            <div class="text-center md:ms-2">
                <p class="text-2xl font-bold text-gray-700">Iris Bohn</p>
                <p class="text-md font-bold text-gray-600">Entspannung Ostsee</p>
            </div>
        </div>

        <nav class="flex justify-center mt-2 md:m-0 md:items-center">
            <ul class="flex gap-5 text-sm md:text-base">
                <li><a href="/" class="text-gray-700 hover:text-gray-500 hover:underline">Home</a></li>
                <li><a href="/" class="text-gray-700 hover:text-gray-500 hover:underline">Kurse</a></li>
                <li><a href="/" class="text-gray-700 hover:text-gray-500 hover:underline">Blog</a></li>
            </ul>
        </nav>
    </div>
</header>
