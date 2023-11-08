<x-layout>
    <x-slot:title>Kurse</x-slot:title>

    <div class="flex justify-center md:mt-3 mb-5">
        <img class="h-auto w-auto rounded shadow-xl" width="780" height="647" src="{{ asset('img/klangschalen.jpg') }}" alt="Ein Bild mit mehreren Klangschalen auf einer Wiese">
    </div>

    <h1 class="text-3xl md:text-4xl mt-2 mb-5 text-gray-700">Kurse</h1>

    <div class="course-item mb-7 md:mb-9">
        <h2 class="font-bold md:font-normal md:text-2xl text-gray-700">Progressive Muskelrelaxation</h2>

        <div class="prose md:prose-md lg:prose-lg max-w-none mt-3 mb-6">
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            </p>
            <p>
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua.
            </p>
        </div>

        <a class="text-white inline-flex items-center px-4 py-3 md:py-3 md:px-6 text-center rounded-lg bg-indigo-500 hover:bg-indigo-700 focus:ring focus:outline-none focus:ring-indigo-200" href="{{ route('muscle-relaxation') }}">
            Zum Kurs
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="ms-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>
    </div>

    <hr class="border-b border-gray-200 mb-5 md:mb-7">

    <div class="course-item mb-6">
        <h2 class="font-bold md:font-normal md:text-2xl text-gray-700">Autogenes Training</h2>

        <div class="prose md:prose-md lg:prose-lg max-w-none mt-3 mb-6">
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            </p>
            <p>
                Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua.
            </p>
        </div>

        <a class="text-white inline-flex items-center px-4 py-3 md:py-3 md:px-6 text-center rounded-lg bg-indigo-500 hover:bg-indigo-700 focus:ring focus:outline-none focus:ring-indigo-200" href="{{ route('autogenic-training') }}">
            Zum Kurs
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="ms-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>
    </div>
</x-layout>
