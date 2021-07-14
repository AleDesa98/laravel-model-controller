<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>laravel-model-controller</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>
    <body>
        <div class="container">
            <div class="cards-container">
                @foreach ($movies as $movie)
                    <div class="card">
                        <h2>{{ $movie->title }}</h2>
                        <h4>{{ $movie->original_title }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>