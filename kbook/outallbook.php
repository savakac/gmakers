<?php
include("config_dbdat.php");
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("select * from knihy");

echo 	"<table border = '1' bgcolor = 'red'>
		<tr>
			<td width = '50'>ID</td>
			<td width = '300'>Nazov knihy</td>
			<td width = '300'>Zaner knihy</td>
			<td width = '50'>Rok</td>
		</tr>
	</table>";
while ($zaznam=MySQL_Fetch_Array($vysledek)):
//echo "|".$zaznam["nazov"]."|".$zaznam["zaner"]."|".$zaznam['rokVydania']."|</br>";
echo	"<table border = '1' bgcolor = 'grey'> 
		<tr>
			<td width = '50'>".$zaznam['id']."</td>
			<td width = '300'>".$zaznam['nazov']."</td>
			<td width = '300'>".$zaznam['zaner']."</td>
			<td width = '50'>".$zaznam['rokVydania']."</td>
		</tr>
	</table>";
endwhile;
echo "</br><a href='index.php'>Navrat na hlavnu stranku.</a>"
?>
