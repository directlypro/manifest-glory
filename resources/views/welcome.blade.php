<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manifest Glory Global</title>
        @vite('resources/css/app.css')
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    </head>
    <body>
        <livewire:navigation-bar />
        <livewire:home-page />
    </body>
</html>
