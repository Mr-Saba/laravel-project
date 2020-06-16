<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        h1 {
            text-align: center;
        }
        .user {
            display: block;
            margin: 40px;
        }
    </style>
</head>
<body>
    <h1>Movies</h1>
    @foreach($movieList as $movies)
<div class="user">
    <a {{ url('avtoris unikaluri misamarti') }}> <strong>Author:</strong> {{$movies->author()->author }}</a>
    <div> <strong>Name:</strong> {{$movies->name }}</div>
    <div> <strong>Language:</strong> {{$movies->language }} </div>  
    <div> <strong>Summary:</strong> {{$movies->summary }} </div>
    <div> <strong>Production Year:</strong> {{($movies->production_year) }} </div>  
    <div> <strong>Duration:</strong> {{$movies->duration }} </div>
    <div> <strong>Genre:</strong> {{$movies->genre }} </div>
    <div> <strong>IMDB:</strong> {{$movies->imdb }} </div>
</div>
    @endforeach
</body>
</html>