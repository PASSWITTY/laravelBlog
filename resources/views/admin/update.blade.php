<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Update Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4kfh8axCROsWJZK+kNcFzVEKTOQ6hwzOnXgltsuvzqOiF/VVWaw/aWwIZb5zBNPQ" crossorigin="anonymous">
    <!-- Custom Styles -->
    <style>
        /* Add your custom styles here */
    </style>
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

    <div class="container mt-5">
        <h1 class="mb-4">Update Blog Post</h1>

        <div class="text-success text-center dissplay-4 mb-4 ">
            @if(session()->has('success'))
            <p>
                {{ session()->get('success') }}
            </p>
            @endif

            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <form action="{{route('updatepage')}}" method='Post'>
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label"></label>
                <input type="text" class="form-control" name="id" value="{{$blogItem->id}}" hidden>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$blogItem->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" name="content" rows="5">{{$blogItem->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="postAuthor" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" name="author" value="{{$blogItem->author}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-5P3FzKxC0f8teYkIe7FXyvuEyYWzy1i3NFEzBvHr4xqzyUC2rvz4Do1aCy+txkGJ" crossorigin="anonymous"></script>
</body>

</html>