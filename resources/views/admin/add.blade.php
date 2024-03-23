<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Blog Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    <div class="container mt-5 shadow-sm p-3 rounded bg-white">
        <h1 class="text-center display-6 mb-4">Create New Blog Post</h1>
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

        <form action="{{route('saveblog') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="postTitle" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="postBody" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="10" name='content' required></textarea>
            </div>
            <div class="mb-3">
                <label for="postAuthor" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFOnpDln4hr08t9Y8UjHLNR2kCTHWuD5fNwE5zNHft89u7vNSoCblhqEMv" crossorigin="anonymous"></script>
</body>

</html>