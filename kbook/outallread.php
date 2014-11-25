<?php
include("config_dbdat.php");
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("select * from citatel");


echo 	"<table border = '1' bgcolor = 'red'> 
		<tr>
			<td width = '50'>ID</td>
			<td width = '200'>Meno</td>
			<td width = '200'>Priezvisko</td>
			<td width = '150'>Datum narodenia</td>
			<td width = '300'>Email</td>
			<td width = '50'>P</td>
		</tr>
	</table>";
while ($zaznam=MySQL_Fetch_Array($vysledek)):
//echo $zaznam["meno"]."---".$zaznam["priezvisko"].".";
echo 	"<table border = '1' bgcolor = 'grey'> 
		<tr>
			<td width = '50'>".$zaznam['id']."</td>
			<td width = '200'>".$zaznam['meno']."</td>
			<td width = '200'>".$zaznam['priezvisko']."</td>
			<td width = '150'>".$zaznam['datumNarodenia']."</td>
			<td width = '300'>".$zaznam['email']."</td>
			<td width = '50'>".$zaznam['pocKnih']."</td>
		</tr>
	</table>";
endwhile;
echo "</br><a href='index.php'>Navrat na hlavnu stranku.</a>"
?>
