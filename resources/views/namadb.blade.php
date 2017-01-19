<!DOCTYPE html>
<html>
<head>
	<title>Testing Model/Database</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	@foreach($costumer as $items)
	<h1>{{ $items['Nama'] }}</h1>
	<h1 class="text-muted">{{ $items['Nomor'] }}</h1>
	@endforeach
</body>
</html>