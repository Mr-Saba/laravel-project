<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="{{ url()->current() }}" method="POST">
        {{csrf_field()}}
        <input type="email" name="email" value="{{old('email')}}" placeholder="enter email">
        <input type="password" name="password" placeholder="enter password">
        <button type="submit">login</button>
        @if (Auth::check())
        <a href="{{ url('/logout') }}">logout</a>
            @endif
    </form>
</body>
</html>