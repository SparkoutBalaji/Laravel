<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
    <style>
        table,td{
            border: 0.5px solid black;

        }
    </style>
</head>
<body>
    <h1>Users List</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>ACTION</td>
        </tr>
        @foreach ($user as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email_id }}</td>
                <td><a href="{{ url('users/'.$user->id.'/edit') }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
<a href="{{ url('users/create') }}">Create User</a>
</body>
</html>
