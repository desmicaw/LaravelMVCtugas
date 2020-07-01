<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
</head>
<body>
	<form action="/sapa" method="POST">
		@csrf
		<input type="text" name="nama">
		<input type="submit" value="masuk">
	</form>
</body>
</html>