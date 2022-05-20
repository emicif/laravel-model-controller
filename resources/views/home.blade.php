<h1>
    DATABASE MOVIE
</h1>
{{-- @dump($movies) --}}

<div class="card">
    @foreach ($movies as $index => $item)
        <h2>TITLE: {{ $item['title'] }}</h2>
        <p>ORIGINAL TITLE: {{ $item['original_title'] }}</p>
        <p>NATIONALITY: {{ $item['nationality'] }}</p>
        <p>DATE: {{ $item['date'] }}</p>
    @endforeach
</div>


{{-- <p>{{ $movies[0]['title'] }} </p> --}}
