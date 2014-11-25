<html>
<head>
	<title>Stranka na odstranenie citatela</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Nastavenie kodovania stranky-->
	<title>jQuery UI Autocomplete - Default functionality</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<script>
	$(function() {
		var availableTags = [
			<?php 
			include("config_dbdat.php");
			mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
			mysql_select_db(SQL_DBNAME);
			$vysledek=mysql_query("select id, meno, priezvisko from citatel");
			while ($zaznam=MySQL_Fetch_Array($vysledek)):
				echo "\"" .$zaznam['id']. " " .$zaznam['meno']. " " .$zaznam['priezvisko']. "\",";
			endwhile;
		?>
	];
	$( "#tagsCitatel" ).autocomplete({
	source: availableTags
	});
	});
	</script>
</head>
<body>
<h1>Odstranenie citatelov</h1></br>
<form action="removeread.php" method="post">
	<fildset>
		<legend>Odstranenie zaznamu</legend>
		<div class="ui-widget">
			<label for="tagsCitatel">Odstranit citatela: </label>
			<input id="tagsCitatel" name="citatel" type=text>					
		</div></br>
		<input type="submit" value="Odoslat"></br>		
	</fildset>
</form></br>
<a href="index.php">Prejst na hlanu stranku.</a>
</body>
</html>
