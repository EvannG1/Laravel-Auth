<h1>Dashboard</h1>
@if (Auth::check())
    <p>You are connected</p>
@endif
<p>Username : <b>{{ Auth::user()->name }}</b></p>
<p>Email address : <b>{{ Auth::user()->email }}</b></p>
<pre>{{ Auth::user() }}</pre>
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('logout') }}">Logout</a>