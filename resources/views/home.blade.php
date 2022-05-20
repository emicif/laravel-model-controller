<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Model Controller</title>
</head>

<body>
    <h1>
        DATABASE MOVIE
    </h1>
    {{-- @dump($movies) --}}

    <div class="card-container">
        @foreach ($movies as $index => $item)
            <div class="card">
                <h2>{{ $item['title'] }}</h2>
                <h4>{{ $item['original_title'] }}</h4>
                <p class="nationality">{{ $item['nationality'] }}</p>
                <p>{{ $item['date'] }}</p>
            </div>
        @endforeach
    </div>




    {{-- <p>{{ $movies[0]['title'] }} </p> --}}
</body>

</html>
