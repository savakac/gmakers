<?php
include("config_dbdat.php");
$datum = $_POST['datum'];
$book = $_POST['vNBook'];
$zaner = $_POST['zaner'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);

$vysledek=mysql_query("select pozicane.id, knihy.nazov, knihy.zaner, knihy.rokVydania, citatel.meno, citatel.priezvisko, pozicane.datumPozicania from knihy join pozicane on knihy.id = pozicane.kniha join citatel on pozicane.citatel = citatel.id where datumVratenia is $book and zaner = '$zaner' and datumPozicania < '$datum'");

echo	"<table border = '1' bgcolor = 'red'> 
		<tr>
			<td width = '50'>ID</td>
			<td width = '300'>Nazov knihy</td>
			<td width = '200'>Zaner</td>
			<td width = '100'>Rok vydania</td>
			<td width = '200'>Meno</td>
			<td width = '200'>Priezvisko</td>
			<td width = '200'>Datum pozicania</td>
		</tr>
	</table>";

while ($zaznam=MySQL_Fetch_Array($vysledek)):
//echo $zaznam["nazov"]."---".$zaznam["priezvisko"]."---".$zaznam["meno"].".";
echo "<table border = '1' bgcolor = 'grey'> 
		<tr>
			<td width = '50'>".$zaznam['id']."</td>
			<td width = '300'>".$zaznam['nazov']."</td>
			<td width = '200'>".$zaznam['zaner']."</td>
			<td width = '100'>".$zaznam['rokVydania']."</td>
			<td width = '200'>".$zaznam['meno']."</td>
			<td width = '200'>".$zaznam['priezvisko']."</td>
			<td width = '200'>".$zaznam['datumPozicania']."</td>
		</tr>
	</table>";
endwhile;
echo "</br><a href='index.php'>Navrat na hlavnu stranku.</a>"
?>