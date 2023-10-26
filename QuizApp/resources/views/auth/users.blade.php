<div>
    @foreach ($user as $user)
<h2>ID</h2>
<p>{{ $user->id }}</p>
<h2>NAME</h2>
<p>{{ $user->name }}</p>
<h2>EMAIL</h2>
<p>{{ $user->email }}</p>
<h2>PASSWORD</h2>
<p>{{ $user->password }}</p>
    @endforeach
</div>
