<html>
<head>
<title>Stranka na vkladanie knih</title>
</head>
<body>
<h1>Vkladanie knih</h1><br>
<form action="addbook.php" method="post">
	<fildset>
		<legend>Vlozenie zaznamu</legend>
		Nazov knihy: <input name="nazov" type=text><br>
		Zaner knihy: 	<select name="zaner" size="1">
					<option value="Odborna literatura">Odborna literatura
					<option value="Dobrodruzna literatura">Dobrodruzna literatura
					<option value="Scifi">Scifi
					<option value="Roman">Roman
					<option value="Poviedka">Poviedka
				</select></br>
		Rok vydania: <input name="rokVydania" type=text><br>
		<input type="submit" value="Odoslat"><br>		
	</fildset>
</form><br>
<a href="index.php">Prejst na hlavnu stranku.</a>
</body>
</html>
