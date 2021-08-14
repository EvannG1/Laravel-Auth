<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>
<body>    
    @foreach ($errors->all() as $error)
        <div style="color:red;">{{ $error }}</div>
    @endforeach

    <form method="post" action="{{ route('authenticate') }}">
        @csrf
        <input type="text" name="name" placeholder="Username...">
        <br>
        <input type="password" name="password" placeholder="Password...">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>