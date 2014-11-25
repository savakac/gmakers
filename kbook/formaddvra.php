<html>
<head>
	<title>Stranka na vratenie knihy</title>
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
			$vysledek=mysql_query("select pozicane.id as idPoz, citatel.id as idCit, citatel.meno, citatel.priezvisko, knihy.nazov from knihy join pozicane on knihy.id = pozicane.kniha join citatel on pozicane.citatel = citatel.id where datumVratenia is null");
			while ($zaznam=MySQL_Fetch_Array($vysledek)):	
				echo "\"" .$zaznam['idPoz']. " " .$zaznam['meno']. " " .$zaznam['priezvisko']. " " .$zaznam['nazov']. " " .$zaznam['idCit']. "\",";
			endwhile;
		?>
	];
	$( "#tagsVra" ).autocomplete({
	source: availableTags
	});
	});
	</script>
</head>
<body>
<h1>Zaznam o vrateni knihh</h1></br>
<form action="addvra.php" method="post">
	<fildset>
		<legend>Vlozenie zaznamu</legend>
		<div class="ui-widget">
			<label for="tagsVra">Vyhladanie zaznamu o knihe: </label>
			<input id="tagsVra" name="pozicane" type=text>
		</div></br>

		<!--ID citatela: <input name="citatel" type=text> Zadajte cislo od 1 po 30 alebo vid dotaz <a href="outallread.php">vypisat citatelov</a> a zadajte ID citatela.</br>
		ID pozicania: <input name="pozicane" type=text> Zadajte ID pozicania alebo vid dotaz <a href ="outallpoz.php">vypisat pozicane knihy</a> a zadajte ID pozicania.</br>-->
		<!--ID knihy: <input name="kniha" type=text></br>-->
		<!--Datum zapozicania: <input type="date" name="datumPozicania" type=text></br>-->
		Datum vratenia: <input type="date" name="datumVratenia" type=text></br>
		<input type="submit" value="Odoslat"></br>		
	</fildset>
</form></br>
<a href="index.php">Prejst na hlanu stranku.</a>
</body>
</html>
