@if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>') ) !!}
    </ul>
@endif
<form action="/store" method="post">
    <label for="name">NAME <input type="text" name="name" id="name"> </label> <br>
    <label for="email">EMAIL <input type="email" name="email" id="email"></label> <br>
    <label for="password">PASSWORD <input type="password" name="password" id="password"></label> <br>
    <label for="password_confirm">CONFIRM PASSWORD <input type="password" name="password_confirmation" id="password_confirmation"></label> <br>
    <input type="submit" value="REGISTER">
    @csrf
</form>
