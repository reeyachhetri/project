<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <title>Document</title>
</head>
<body>
<div class="header">
    <form method="post" action="{{route('store')}}">
        @csrf
        <h3>Movie Form</h3>
        <div class="cont">
        <label for="movie_name">Movie Name : </label>
            <input name="movie_name" type = "text" id="movie_name">
            <br>
            <br>
            <label for="date">Released Date : </label>
            <input name="date" type = "date" id="date">
            <br>
            <br>
            <label for="director">Director : </label>
            <input name="director" type = "text" id="director">
            <br>
            <br>
            <label for="cast">Cast : </label>
            <input name="cast" type="text" id="cast">
            <br>
            <br>
            <label for ="review"> Rating : </label> <br>
            <input name="review" type="radio" value="Very good"> Very Good <br>
            <input name="review" type="radio" value="good"> Good <br>
            <input name="review" type="radio" value="bad"> Bad <br>
            <input name="review" type="radio" value="worst"> Worst 
            
            <br>
            <br>
            <label for="description"> Description : </label>
            <input name="description" type = "text" id = "description">
            <br>
            <br>
            </div>
            <button class="btn">Submit</button>
        </div>

    </form>
</body>
</html>