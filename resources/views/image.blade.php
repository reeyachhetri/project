<!DOCTYPE html>
<html>
<head>
    <title>laravel 8 image upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
    
<body>
    <div id="contact" class="container">
        <h1 class="text-center" style="margin-top: 100px">Image Upload</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>

            <img src="images/{{ Session::get('image') }}">
        @endif

        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control" name="image" />

            <button type="submit" class="btn btn-sm">Upload</button>
        </form>

    </div>
</body>
  
</html>