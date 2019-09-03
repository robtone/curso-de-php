<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="recibe.php" method="get">
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre">

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="Mujer">
		<br>
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
		</select>
		<br>

		<label for="terminos">Aceptas los terminos </label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>

		<input type="submit" value ="Enviar">
	</form>
</body>
</html>