<html>
<head>
<title>Filter</title>
</head>
<body>
<h1>Filter rok</h1></br>
<form action="filter.php" method="post">
	<fildset>
		<legend>Zadajte parametre pre vypis</legend>
		<select name="vNBook" size="1">
			<option value="not null">Vratene</option>
			<option value="null">Nevratene</option>
		</select>
		<select name="zaner" size="1">
			<option value="Odborna literatura">Odborna literatura</option>
			<option value="Dobrodruzna literatura">Dobrodruzna literatura</option>
			<option value="Scifi">Scifi</option>
			<option value="Roman">Roman</option>
			<option value="Poviedka">Poviedka</option>
		</select>
		Do datumu: <input type="date" name="datum" type=text></br>
		<!--Datum vratenia: <input type="date" name="datumVratenia" type=text></br>-->
		<input type="submit" value="Odoslat"></br>		
	</fildset>
</form></br>
<a href="index.php">Prejst na hlanu stranku.</a>
</body>
</html>