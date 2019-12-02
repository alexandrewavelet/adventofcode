<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Advent of code
                </div>

                <div class="links">
                    <a href="{{ route('days.one') }}">Day 1</a>
                    <a href="{{ route('days.two') }}">Day 2</a>
                    <a href="{{ route('days.three') }}">Day 3</a>
                </div>
            </div>
        </div>
    </body>
</html>
