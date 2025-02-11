<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="">
        <title>{{ $title ?? 'Page Title' }}</title>

        <!--Styles Tailwind-->
        @vite('resources/css/app.css')
    </head>
    <body class="flex flex-col">
        <x-header/>
        {{ $slot }}
        <x-footer/>
    </body>
</html>
