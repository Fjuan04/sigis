<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('sigin')}}" method="post">
        @csrf
        <label for="">Correo:</label>
        <input type="text" name='email'>
        <label for="">Password:</label>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <h2>{{$error}}</h2>
        @endforeach
    @endif
</body>
</html>