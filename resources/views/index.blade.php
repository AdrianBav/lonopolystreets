<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app" class="min-h-screen bg-gray-200 antialiased xl:flex xl:flex-col xl:h-screen">
            <site-header class="xl:flex-shrink-0"></site-header>

            <div class="xl:flex-1 xl:flex xl:overflow-y-hidden">
                <search-filters></search-filters>

                <main class="py-6 xl:flex-1 xl:overflow-x-hidden">
                    <property-cards :locations='@json($locations)'></property-cards>
                </main>

            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
