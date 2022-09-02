<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="20px">
        <div class="border">
            <h2>Movie Details</h2><br>
        </div>
        
        <div class="container">
  <div class="row">
  @foreach($movies as $key => $movie)
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('img/movie.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$movie->movie_name}}
                    <br>Released date: {{$movie->released_date}}
                    <br>Director: {{$movie->director}}
                    <br>Cast: {{$movie->cast}}
                    <br>Rating: {{$movie->rating}}
                    <br>Description: {{$movie->description}}
                </h5>
    
                <a href="#" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    <br>

    </div>
    @endforeach
    
    
</body>
</html>