<?php
include("config_dbdat.php");
$citatel = $_POST['id_uzivatela'];
$resultCitatel = ' ';
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);

for ($i = 0; $i <= (strlen($citatel) - 5); $i++)
{
	if ($citatel[$i] == '0' || $citatel[$i] == '1' || $citatel[$i] == '2' || $citatel[$i] == '3' || $citatel[$i] == '4' || $citatel[$i] == '5' || $citatel[$i] == '6' || $citatel[$i] == '7' || $citatel[$i] == '8' || $citatel[$i] == '9')
		$resultCitatel[$i] = $citatel[$i];
}
$vysledek=mysql_query("delete from citatel where id = '$resultCitatel'");

if ($vysledek) {
	echo "Zaznam bol odstraneny";
}
else {
	echo "Pri odstranovani doslo k chybe";
}
header("HTTP/1.1 301 Moved Permanently");
header("Location: formaddread.php");
header("Connection: close");
?>
