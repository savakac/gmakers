<?php

	function isEmailOk($i)
	{
		return ereg("^.+@.+\..+$", $i);
	}

	function isEmailInDb($email, $connect)
	{
		$query = mysql_query("SELECT * FROM users WHERE email = '".$email."'", $connect);
		return (boolean) mysql_num_rows($query);
	}

	function isUsernameInDb($username, $connect)
	{
		$query = mysql_query("SELECT * FROM users WHERE username = '".$username."'", $connect);
		return (boolean) mysql_num_rows($query);
	}


	$connect = mysql_connect("mysql.webzdarma.cz", "salva72", "04jan03");
	mysql_select_db("salva72");


	$isShowView = true;
	if (!empty($_POST))
	{
		if (!isEmailOk($_POST['email'])) echo "Zadali ste nespravny format emailu.";
		elseif (isEmailInDb($_POST['email'], $connect)) echo "Zadany email sa uz nachadza v databaze.";
		elseif (isUsernameInDb($_POST['username'], $connect)) echo "Zadane meno sa uz nachadza v databaze.";
		elseif ((strlen($_POST['username']) > 50) || strlen($_POST['username']) < 5) echo "Meno musi byt v rozsahu 5 az 50 znakov.";
		elseif ((strlen($_POST['password']) > 50) || strlen($_POST['password']) < 5) echo "Heslo musi byt v rozsahu 5 az 50 znakov.";
		else
		{
			$isShowView = false;
			echo "Dakujeme za registraciu. Na Vasu emailovu adresu ".$_POST['email']." bol zaslany email. Pre dokoncenie registracie.";
			$query = mysql_query("INSERT INTO users (email, username, password) VALUES ('".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."');", $connect);
			$endid = mysql_insert_id();
			$path = "http://".$_SERVER["SERVER_NAME"]."/test/rok.php?id=".$endid."&email=".$_POST['email'];
			$message = "Dakujeme za registraciu. Pre dokoncenie registracie kliknite na nasledujuci odkaz: ".$path." S pozdravom.";

			mail($_POST['email'], "Registracia na portali", $message);
		}
	}

	if ($isShowView): ?>
	<form action="adduser.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" value=""></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="odoslat" value="odoslat"></td>
			</tr>
		</table>
	</form>

<?php endif ?>