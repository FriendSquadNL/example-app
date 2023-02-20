<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forum</title>
<!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <style>
    .nav-anchor {
      color: white;
      text-decoration: none;
    }
    </style>
</head>
<body>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{route('index')}}" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="nav-link px-2 text-white ">Profile</a></li>
            <li><a href="{{route('topics.index')}}" class="nav-link px-2 text-white">Topics</a></li>
            <li><a href="{{route('threads.index')}}" class="nav-link px-2 text-white">Threads</a></li>
            <li><a href="{{route('replies.index')}}" class="nav-link px-2 text-white">Replies</a></li>

            <!-- <li><a href="#" class="nav-link px-2 text-white">#</a></li>
            <li><a href="#" class="nav-link px-2 text-white">#</a></li> -->
          </ul>

          @if(Route::current()->getName() == "threads.index" || Route::current()->getName() == "topics.index" || Route::current()->getName() == "replies.index" )
            <a class="nav-link px-2 text-white" href="{{url()->current()}}/create">Create</a></button>
          @endif

          <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
          </form> -->

          <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('login')}}">Login</a></button>
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('register')}}">Register</a></button>
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('logout')}}">Logout</a></button>
            <!-- <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('dashboard')}}">Your profile</a></button> -->
          </div>
        </div>
      </div>
    </header>

      <div class="container">
        @yield('content')
      </div>

  </body>
</html>