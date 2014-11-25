<?php
include("config_dbdat.php");
$rok = $_POST['rok'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("select * from knihy where rokVydania < '$rok'");

echo	"<table border = '1' bgcolor = 'red'> 
		<tr>
			<td width = '50'>ID</td>
			<td width = '300'>Nazov knihy</td>
			<td width = '100'>Rok vydania</td>
		</tr>
	</table>";

while ($zaznam=MySQL_Fetch_Array($vysledek)):
//echo $zaznam["nazov"]."---".$zaznam["priezvisko"]."---".$zaznam["meno"].".";
echo "<table border = '1' bgcolor = 'grey'> 
		<tr>
			<td width = '50'>".$zaznam['id']."</td>
			<td width = '300'>".$zaznam['nazov']."</td>
			<td width = '100'>".$zaznam['rokVydania']."</td>
		</tr>
	</table>";
endwhile;
echo "</br><a href='index.php'>Navrat na hlavnu stranku.</a>"
?>
