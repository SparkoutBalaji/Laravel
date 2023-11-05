<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/') }}">E-Shopping</a>
        <ul class="navbar">
          @guest
          <!-- Display login and registration links when not logged in -->
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          @else
          <!-- Display user dropdown menu when logged in -->
          <li class="nav-item dropdown">
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                  @auth
                  <li><a href=""> {{ Auth::user()->name }}</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                      @csrf
                  </form>
                  @endauth
              </div>
          </li>
          @endguest
      </ul>
      </div>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
