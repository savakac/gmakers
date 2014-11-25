<?php
include("config_dbdat.php");
$nazov = $_POST['nazov'];
$zaner = $_POST['zaner'];
$rokVydania = $_POST['rokVydania'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("insert into knihy(nazov, zaner, rokVydania) values ('$nazov', '$zaner', '$rokVydania')");

if ($vysledek) {
	echo "Zaznam bol vlozeny";
}
else {
	echo "Pri vkladani doslo k chybe";
}

header("HTTP/1.1 301 Moved Permanently");
header("Location: formaddbook.php");
header("Connection: close");
?>
