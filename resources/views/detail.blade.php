
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/details.css')}}">
</head>

<body>
    <h1> Details About this movie </h1>
    <img src="{{asset('img/film.png')}}" class="card-img-top" alt="Movie">
    <br>
    <h3 class="card-title">{{$movie->movie_name}}</h3>
    <br>
    <br>
         <h5> Release date: </h5> <h4> {{$movie->released_date}}</h4>
    <br> <h5> Director: </h5> <h4>{{$movie->director}}</h4>
    <br> <h5> Cast: </h5> <h4>{{$movie->cast}}</h4>
    <br> <h5> Description: </h5> <h4>{{$movie->description}} </h4>  
</body>
</html>