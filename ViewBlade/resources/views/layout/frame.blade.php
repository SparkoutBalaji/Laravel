<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" defer></script>
</head>
<body>
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('index') }}">ViewBlade</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
      <li><a href="{{ route('contact') }}">CONTACT</a></li>
      <li><a href="{{ route('about') }}">ABOUT US</a></li>
      <li><a href="{{ route('getdata') }}">GETDATA</a></li>
      <li><a href="{{ route('passdata') }}">PASSDATA</a></li>
      <li><a href="{{ route('login') }}">LOGIN</a></li>
      <li><a href="{{ route('upload') }}">UPLOAD FILE</a></li>
      <li><a href="{{ route('form') }}">FORM</a></li>


    </ul>
  </div>
</nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <h4><p>&copy; SparkoutBalaji</p></h4>
</footer>
</body>
</html>
