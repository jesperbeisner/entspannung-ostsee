<header class="flex justify-center w-full border-b border-blue-200 bg-blue-50 py-2 mb-3 shadow-[0_5px_6px_-1px_rgba(0,0,0,0.1)]">
    <div class="flex flex-col w-full md:max-w-screen-md">
        <div class="flex flex-col items-center mb-3">
            <a href="{{ route('index') }}">
                <img class="h-auto w-32 rounded" width="960" height="524" src="{{ asset('img/segelboote-auf-dem-wasser.png') }}" alt="www.entspannung-ostsee Logo. Segelboote auf dem Wasser.">
            </a>

            <div class="text-center">
                <p class="text-2xl font-bold text-gray-700">Iris Bohn</p>
                <p class="text-md font-bold text-gray-600">Entspannung Ostsee</p>
            </div>
        </div>

        <nav class="flex justify-center">
            <div class="flex flex-col items-center gap-2 sm:gap-4 sm:flex-row">
                <ul class="flex gap-4 flex-row text-sm sm:text-base md:flex-row">
                    <li><a href="{{ route('index') }}" class="link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="link">Über</a></li>
                    <li><a href="{{ route('course') }}" class="link">Kurse</a></li>
                    <li><a href="{{ route('blog') }}" class="link">Blog</a></li>
                </ul>
                <ul class="flex gap-4 flex-row text-sm sm:text-base md:flex-row">
                    <li><a href="{{ route('lectures') }}" class="link">Vorträge</a></li>
                    <li><a href="{{ route('consulting') }}" class="link">Beratung</a></li>
                    <li><a href="{{ route('sound-massage') }}" class="link">Klangmassage</a></li>
                    <li><a href="{{ route('contact') }}" class="link">Kontakt</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
