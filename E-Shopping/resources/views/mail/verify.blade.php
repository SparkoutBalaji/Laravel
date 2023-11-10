<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Verify</title>
</head>
<body>
    <div>
        <h1>Dear {{ $vendor['name'] }}</h1>
        <p>Welcome To E-Shopping Mail Verifycation...</p>
        <p>{{ $vendor['id'] }}</p>
        <button class="btn btn-primary"><a href="http://127.0.0.1:8000/mail/verified/{{ $vendor['id'] }}" target="_blank">Email Verification</a></button>
        {{-- <form action="{{ route('mail.verified') }}" method="post">@csrf@method('PUT')<button type="submit" class="btn btn-primary">EMAIL VERIFIED</button></form> --}}
    </div>
</body>
</html>
