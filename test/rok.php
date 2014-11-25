<?php
	$id = $_GET['id'];
	$email = $_GET['email'];

	$connect = mysql_connect("mysql.webzdarma.cz", "salva72", "04jan03");
	mysql_select_db("salva72");

	$query = mysql_query("UPDATE users SET rOK = 1 WHERE id = '$id' AND email = '$email'");

	header("Location: http://www.salva.xf.cz");
?>