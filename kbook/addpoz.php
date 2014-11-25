<?php
include("config_dbdat.php");
$citatel = $_POST['citatel'];
$kniha = $_POST['kniha'];
$datumPozicania = $_POST['datumPozicania'];
$resultCitatel = ' ';
$resultKniha = ' ';
//$datumVratenia = $_POST['datumVratenia'];
//$rokVydania = $_POST['rokVydania'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);
for ($i = 0; $i <= 10; $i++)
{
	if ($citatel[$i] == '0' || $citatel[$i] == '1' || $citatel[$i] == '2' || $citatel[$i] == '3' || $citatel[$i] == '4' || $citatel[$i] == '5' || $citatel[$i] == '6' || $citatel[$i] == '7' || $citatel[$i] == '8' || $citatel[$i] == '9')
		$resultCitatel[$i] = $citatel[$i];
}
for ($i = 0; $i <= 10; $i++)
{
	if ($kniha[$i] == '0' || $kniha[$i] == '1' || $kniha[$i] == '2' || $kniha[$i] == '3' || $kniha[$i] == '4' || $kniha[$i] == '5' || $kniha[$i] == '6' || $kniha[$i] == '7' || $kniha[$i] == '8' || $kniha[$i] == '9')
		$resultKniha[$i] = $kniha[$i];
}
$vysledek1=mysql_query("insert into pozicane(citatel, kniha, datumPozicania) values ('$resultCitatel', '$resultKniha', '$datumPozicania')");
// Vyber riadku tabulky.
$vysledok2=mysql_query("select pocKnih from citatel where id = $resultCitatel");
// Rozbitie na asociativne pole.
$zaznam=MySQL_Fetch_Array($vysledok2);
// Uprava hodnoty v jednom riadku.
$up = $zaznam["pocKnih"] + 1;
$vysledok3=mysql_query("update citatel set pocKnih = '$up' where id = '$resultCitatel'");

if ($vysledek1) {
	echo "Zaznam bol vlozeny";
}
else {
	echo "Pri vkladani doslo k chybe";
}
header("HTTP/1.1 301 Moved Permanently");
header("Location: formaddpoz.php");
header("Connection: close");
?>
