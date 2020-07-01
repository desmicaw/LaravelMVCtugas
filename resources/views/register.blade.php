<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title> Register </title>
	</head>
	<body>
		<h1> Buat Account Baru! </h1>
		<h3> Sign Up Form </h3>
		<form action="/welcome" method="POST">
			@csrf
			<label for="firstname"> First name: </label><br><br>
			<input type="text" name="first_name" id="firstname">
			<br><br>

			<label for="lastname"> Last name: </label><br><br>
			<input type="text" name="last_name" id="lastname">
			<br><br>

			<label> Gender: </label><br><br>
			<input type="radio" name="gendr" value="0"> Male   <br>
			<input type="radio" name="gendr" value="1"> Female <br>
			<input type="radio" name="gendr" value="2"> Other
			<br><br>

			<label> Nationality: </label><br><br>
			<select name="wn">
				<option value="ind"> Indonesian </option>
				<option value="singh"> Singaporean </option>
				<option value="malay"> Malaysian </option>
				<option value="aus"> Australian </option>
			</select>
			<br><br>

			<label for=""> Language Spoken: </label><br><br>
			<input type="checkbox" name="trampilbahasa" value="0"> Bahasa Indonesia<br>
			<input type="checkbox" name="trampilbahasa" value="1"> English<br>
			<input type="checkbox" name="trampilbahasa" value="2"> Other<br>
			<br><br>

			<label> Bio: </label><br><br>
			<textarea cols="30" rows="10"></textarea><br>

			<input type="submit" name="bio" value="Sign Up">
		</form>
	</body>
</html>