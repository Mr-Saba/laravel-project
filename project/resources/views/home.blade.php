<html>
<head></head>

<title>{{ $title }}</title>
<body>
<h1>
Hello World
</h1>
<h3>
    {{ $content }}
</h3>
@foreach($items as $item)
<li>{{ $item }}</li> 
@endforeach

</body>
</html>