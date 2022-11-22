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
    <form method="post" action="{{route('book.store')}}">
        @csrf
        <h3>Booking</h3>
        <div class="cont">
        <label for="name"> Name : </label>
            <input name="name" type = "text" id="name">
            <br>
            <br>
           <input type="hidden" value="{{$movie->id}}" name="movie_id">
            </div>
            <button class="btn">Submit</button>
        </div>

    </form>
</body>
</html>