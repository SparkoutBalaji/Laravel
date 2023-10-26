@if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>') ) !!}
    </ul>
@endif
<form action="/authentication" method="post">
    <label for="uname">USERNAME <input type="email" name="email" id="email"></label> <br> <br>

    <label for="password">PASSWORD <input type="password" name="password" id="password"></label> <br> <br>

    <input type="submit" value="LOGIN">
    @csrf
</form>

<a href="{{ route('register') }}">Register</a>
