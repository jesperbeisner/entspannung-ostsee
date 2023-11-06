<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($title) ? $title . ' - www.entspannung-ostsee.de' : 'www.entspannung-ostsee.de' }}</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-amber-50">
    {{ $slot }}
</body>
</html>
