<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teatimonials</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home') }}">Navbar</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('save')}}">Add Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @foreach ($testimonials as $testimonial)
    <div class="card">
        <div class="card-header">
            {{$testimonial->created_at}}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{$testimonial->feedback}}</p>
                <footer class="blockquote-footer">{{$testimonial->email}}<cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    @endforeach
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>