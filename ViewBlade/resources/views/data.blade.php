<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GETDATA</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div>

    <dl>
    <!--GET DATA BY SPECIFIC ARRAY VALUES-->
    <dt><h3>GET DATA BY SPECIFIC ARRAY VALUES BY KEY NAME</h3></dt>
    <dl>
    <p>NAME : {{ $interns['HARI']['fullname'] }}</p>
    <p>ROLE : {{ $interns['HARI']['role'] }}</p>
</dl>
<h3>GETDATA BY CONTROLLER</h3>
    <ul>

@foreach($interns as $name => $details)
<li>
    <!--Get Data-->
    <strong>Name:</strong> {{ $name }}<br>
    <strong>Full Name:</strong> {{ $details['fullname'] }}<br>
    <strong>Role:</strong> {{ $details['role'] }}
</li>
@endforeach
</ul>
</div>
</body>
</html>

