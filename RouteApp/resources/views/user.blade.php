<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>User</title>

</head>
<body>
        <div class="get">
            <h2>GET METHOD</h2>
            <form action="/get" method="get">
                @csrf
        <input type="number" name="id" id="uid" placeholder="Enter User ID"> <br>
        <input type="text" name="name" id="uname" placeholder="Enter User Name"> <br>
        <input type="submit" value="SUBMIT"></form>
        </div>
        <div class="post">
            <h2>POST METHOD</h2>
        <form action="/post" method="post">
            @csrf
        <input type="number" name="id" id="uid" placeholder="Enter User ID"> <br>
        <input type="text" name="name" id="uname" placeholder="Enter User Name"> <br>
        <input type="submit" value="SUBMIT">
        </form>
        </div>

        <div class="put">
            <h2>PUT METHOD</h2>
        <form action="/put" method="post">
            {{ method_field('PUT') }}
            @csrf
        <input type="number" name="id" id="uid" placeholder="Enter User ID"> <br>
        <input type="text" name="name" id="uname" placeholder="Enter User Name"> <br>
        <input type="submit" value="SUBMIT">
        </form>
        </div>

        <div class="patch">
            <h2>PATCH METHOD</h2>
        <form action="/patch" method="post">
            {{-- {{ method_field('PATCH') }} --}}
            @method('patch')
            @csrf
        <input type="number" name="id" id="uid" placeholder="Enter User ID"> <br>
        <input type="text" name="name" id="uname" placeholder="Enter User Name"> <br>
        <input type="submit" value="SUBMIT">
        </form>
        </div>

        <div class="delete">
            <h2>DELETE METHOD</h2>
        <form action="/delete" method="post">
            {{ method_field('DELETE') }}
            @csrf
        <input type="number" name="id" id="uid" placeholder="Enter User ID"> <br>
        <input type="text" name="name" id="uname" placeholder="Enter User Name"> <br>
        <input type="submit" value="SUBMIT">
        </form>
        </div>
</body>
</html>
