<?php
include("config_dbdat.php");
$meno = $_POST['meno'];
$priezvisko = $_POST['priezvisko'];
$datumNarodenia = $_POST['datumNarodenia'];
$email = $_POST['email'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
$vysledek=mysql_query("insert into citatel(meno, priezvisko, datumNarodenia, email) values ('$meno', '$priezvisko', '$datumNarodenia', '$email')");

if ($vysledek) {
	echo "Zaznam bol vlozeny";
}
else {
	echo "Pri vkladani doslo k chybe";
}
header("HTTP/1.1 301 Moved Permanently");
header("Location: formaddread.php");
header("Connection: close");
?>
