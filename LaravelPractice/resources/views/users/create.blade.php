<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create_User</title>
    <style>
        .error{
            border: 2px solid red;
        }
        .errors{
            color: red;
        }
    </style>
</head>
<body>
    <form action="/users" method="post">
        @csrf
    <h1>Create User</h1>
    <label for="id">ID</label> <br>
    <input type="text" name="id" id="id" value="{{ old('id') }}" class="@error('id') error @enderror"> <br>
        <p class="errors">@error('id') {{ $message }} @enderror</p>
    <label for="name">NAME</label> <br>
    <input type="text" name="name" id="name" value="{{ old('name') }}" class="@error('name') error @enderror"> <br>
        <p class="errors">@error('name') {{ $message }} @enderror</p>
    <label for="email">EMAIL</label> <br>
    <input type="text" name="email_id" id="email_id" value="{{ old('email_id') }}" class="@error('email_id') error @enderror"> <br> <br>
        <p class="errors">@error('email_id') {{ $message }} @enderror</p>
    <input type="submit" value="SUBMIT">
</form>
</body>
</html>
