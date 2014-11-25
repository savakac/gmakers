<?php
include("config_dbdat.php");
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("select pozicane.id, knihy.id as idk, knihy.nazov, citatel.id as idc, citatel.priezvisko, citatel.meno from knihy join pozicane on knihy.id = pozicane.kniha join citatel on pozicane.citatel = citatel.id where datumVratenia is not null");

echo	"<table border = '1' bgcolor = 'red'> 
		<tr>
			<td width = '100'>ID pozicania</td>
			<td width = '100'>ID knihy</td>
			<td width = '300'>Nazov knihy</td>
			<td width = '100'>ID citatela</td>
			<td width = '200'>Priezvisko</td>
			<td width = '200'>Meno</td>
		</tr>
	</table>";
while ($zaznam=MySQL_Fetch_Array($vysledek)):
//echo $zaznam["nazov"]."---".$zaznam["priezvisko"]."---".$zaznam["meno"].".";
echo "<table border = '1' bgcolor = 'grey'> 
		<tr>
			<td width = '100'>".$zaznam['id']."</td>
			<td width = '100'>".$zaznam['idk']."</td>
			<td width = '300'>".$zaznam['nazov']."</td>
			<td width = '100'>".$zaznam['idc']."</td>
			<td width = '200'>".$zaznam['priezvisko']."</td>
			<td width = '200'>".$zaznam['meno']."</td>
		</tr>
	</table>";
endwhile;
echo "</br><a href='index.php'>Navrat na hlavnu stranku.</a>"
?>

