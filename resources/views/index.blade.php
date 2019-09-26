<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} | Bavanco</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>
        @livewireAssets
    </head>

    <body>
        <div id="app" class="min-h-screen bg-gray-200 antialiased xl:flex xl:flex-col xl:h-screen">
            @livewire('foo')
        </div>
    </body>

</html>
