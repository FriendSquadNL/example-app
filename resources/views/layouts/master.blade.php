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
  <?php  use Illuminate\Support\Facades\Auth; ?>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('topics.index') }}" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="{{route('dashboard')}}" class="nav-link px-2 text-white">dashboard</a></li>
            <!-- <li><a href="{{route('threads.index')}}" class="nav-link px-2 text-white">Threads</a></li> -->
            <!-- <li><a href="{{route('replies.index')}}" class="nav-link px-2 text-white">Replies</a></li> -->
          </ul>

          @if(Route::current()->getName() == "threads.index" || Route::current()->getName() == "topics.index" || Route::current()->getName() == "replies.index")
            @if(Auth::check())
              <a class="nav-link px-2 text-white" href="{{url()->current()}}/create">Create</a></button>
            @endif()
          @endif

            <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('login')}}">Login</a></button>
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('register')}}">Register</a></button>
            <button type="button" class="btn btn-outline-light me-2"><a class="nav-anchor" href="{{route('logout')}}">Logout</a></button>
          </div>
        </div>
      </div>
    </header>

      <div class="container">
        @yield('content')
      </div>

  </body>
</html>