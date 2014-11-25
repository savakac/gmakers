<?php
include("config_dbdat.php");
$citatel = $_POST['citatel'];
//$kniha = $_POST['kniha'];
//$datumPozicania = $_POST['datumPozicania'];
$pozicane = $_POST['pozicane'];
$datumVratenia = $_POST['datumVratenia'];
$resultZaznam = ' ';
$resultCitatel = ' ';
//$rokVydania = $_POST['rokVydania'];
mysql_connect(SQL_HOST, SQL_USERNAME, SQL_PASSWORD);
mysql_select_db(SQL_DBNAME);

for ($i = 0; $i <= (strlen($pozicane)- 5); $i++)
{
	if ($pozicane[$i] == '0' || $pozicane[$i] == '1' || $pozicane[$i] == '2' || $pozicane[$i] == '3' || $pozicane[$i] == '4' || $pozicane[$i] == '5' || $pozicane[$i] == '6' || $pozicane[$i] == '7' || $pozicane[$i] == '8' || $pozicane[$i] == '9')
		$resultZaznam[$i] = $pozicane[$i];
}
for ($i = strlen($pozicane); $i >= 5; $i--)
{
	if ($pozicane[$i] == '0' || $pozicane[$i] == '1' || $pozicane[$i] == '2' || $pozicane[$i] == '3' || $pozicane[$i] == '4' || $pozicane[$i] == '5' || $pozicane[$i] == '6' || $pozicane[$i] == '7' || $pozicane[$i] == '8' || $pozicane[$i] == '9')
		$resultCitatel[$i] = $pozicane[$i];
}
//$vysledok=mysql_query("insert into pozicane(citatel, kniha, datumVratenia) values ('$citatel', '$kniha', '$datumVratenia')");
// Nastavenie datumu vratenia.
$vysledok1=mysql_query("update pozicane set datumVratenia = '$datumVratenia' where id = '$resultZaznam'");
// Vyber riadku tabulky.
$vysledok2=mysql_query("select pocKnih from citatel where id = $resultCitatel");
// Rozbitie na asociativne pole.
$zaznam=MySQL_Fetch_Array($vysledok2);
// Uprava hodnoty v jednom riadku.
$up = $zaznam["pocKnih"] - 1;
$vysledok3=mysql_query("update citatel set pocKnih = '$up' where id = '$resultCitatel'");

if ($vysledok1 && $vysledok2 && $vysledok3) {
	echo "Zaznam bol vlozeny";
}
else {
	echo "Pri vkladani doslo k chybe";
}
header("HTTP/1.1 301 Moved Permanently");
header("Location: formaddvra.php");
header("Connection: close");
?>
