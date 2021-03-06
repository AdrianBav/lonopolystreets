<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#156d1d">

        <title>{{ config('app.name') }} | Bavanco</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app" class="min-h-screen bg-gray-200 antialiased xl:flex xl:flex-col xl:h-full">
            <app :groups='@json($groups)' :postcodes='@json($postcodes)'></app>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
