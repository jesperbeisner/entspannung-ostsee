<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TODO: Etwas hinschreiben...">

    <title>{{ isset($title) ? $title . ' - www.entspannung-ostsee.de' : 'www.entspannung-ostsee.de' }}</title>

    @vite('resources/css/app.css')
</head>
<body class="flex flex-col bg-amber-50 w-full">
    @include('components.header')

    <main class="flex justify-center flex-1 w-full">
        <div class="w-full md:max-w-screen-md my-2 px-2 md:px-0">
            {{ $slot }}
        </div>
    </main>

    @include('components.footer')
</body>
</html>
