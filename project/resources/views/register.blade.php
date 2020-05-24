@extends ('layout.app')
<html>
<head>
</head>
<body>
{{ csrf_field() }}
<form action="/register" method="post">
<input type="email" name="email">
<input type="password" name="password">
<button type="submit">submit</button>

</form>
</body>
</html>

