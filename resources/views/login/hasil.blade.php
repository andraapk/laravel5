<!DOCTYPE html>
<html>
<head>
	<title>How to Login</title>
</head>
<body>
@if($login)
	<h1>WELCOME! {{$nama}}</h1>
@else
	<h1>GAGAL!</h1>
@endif
</body>
</html>