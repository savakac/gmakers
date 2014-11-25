<?php

	session_start();

	if ($_SESSION['username']) {

		echo "	<html>
				<head>
				<title>Kniznica</title>
				</head>
				<body>
				<h1>Kniznica</h1></br>
				<a href='formaddbook.php'>Pridat novu knihu.</a></br>
				<a href='formaddread.php'>Pridat noveho citatela.</a></br>
				<a href='formaddpoz.php'>Pridat zaznam o zapozicani.</a></br>
				<a href='formaddvra.php'>Pridat zaznam o vrateni.</a></br>
				<a href='formremoveread.php'>Odstranit citatela.</a></br></br></br>
				<h1>Dotazy</h1>
				<a href='formfilter.php'>Filtrovat podla parametrov</a></br>
				<a href='outallread.php'>Vypisat vsetkych citatelov</a></br>
				<a href='outallbook.php'>Vypisat vsetky knihy</a></br>
				<a href='outallvra.php'>Vypisat vsetky vratene knihy</a></br>
				<a href='outallpoz.php'>Vypisat vseky nevratene knihy</a></br>
				<a href='formyear.php'>Vypisat vsetky knihy do roku</a></br>
				</body>
				</html>";

	}
	else {
		// $_SESSION['errorLogin'] = 1;
		// header("Location: ../main.php");
		die("Musite byt prihlaseny.");
	}

?>