<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .social-icon {
            font-size: 24px;
            margin: 0 10px;
            border: none;
            color: black;
        }

        .social-icon:hover {
            color: black;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('landing')}}">MyBlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('landing')}}">Home</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <!-- Place navigation links here if needed -->
            </div>
            <!-- Social Media Icons -->
            <div class="social-media-icons" style="position: relative; right: 5;">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <!-- Search Icon -->
                <a href="{{route('home')}}" class="btn btn-primary">Manage Blogs</a>
            </div>

        </div>
    </nav>

    <!-- ======= Header ======= -->
    <main id="main">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Blog Post -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Date -->
                            <p class="text-muted">{{$trendings->created_at}}</p>
                            <!-- Title -->
                            <h2 class="card-title">{{$trendings->title}}</h2>
                            <!-- Content -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis sapien sit amet elit vehicula blandit nec sed quam. Nullam vitae dolor nulla. Integer quis odio eget elit consectetur interdum. Quisque nec turpis massa. Suspendisse eu libero a quam ultricies dignissim. Fusce at diam risus.</p>
                            <p class="card-text">{{$trendings->content}}.</p>
                            <p class="card-footer"><i>Created By: </i> {{$trendings->author}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><br /><br /><br /><br />

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer ">

        <div class="footer-content bg-dark text-white py-4 mb-0">
            <div class="container">

                <div class="row g-5">
                    <h3 class="footer-heading">About Blog</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores,
                        exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <div class="col-md-4">
                        <h5>Enter your Feedback</h5><br />
                        <div class="form mb-3">

                            <form action="/feedbacks" method="post">
                                @csrf
                                <input type="email" name="email" class="form-control" placeholder="Your email"><br />
                                <textarea type="text" name="feedback" class="form-control" placeholder="your honest feedback"></textarea><br />
                                <button class="btn btn-outline-light" >Subscribe</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal bg-dark text-white py-4">
            <div class="container ">

                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright ">
                            © Copyright <strong><span>MyBlog</span></strong>. All Rights Reserved
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>