<div class="square">
	
	<div class="squareRound1">
		<h4>O mne</h4>
	</div>
	<div class="squareRound2">
		<p>Pre svoje projekty sa snažím využívať Nette Framework. Pre skladovanie dát používam databázu MySQL. Vyznám sa v konštrukciách HTML, JavaScript, aj CSS, ale považujem sa viac za programátora ako kódera.</p>
	</div>
	</div>

<div class="square">
	<div class="squareRound1">
		<h4>Kontakty</h4>
	</div>
	<div class="squareRound2">
		<ul>
			<li>Twitter: @jansalva</li>
			<li id="mail"><script type="text/javascript">codeMail("Mail: janko.salva")</script> </li>
		</ul>
	</div>
	</div>
		
<div class="square">
	<div class="squareRound1">
		<h4>Login</h4>
	</div>
	<div class="squareRound2">
		<?php

			session_start();

			if ($_SESSION['username']) {
				echo "	<ul>
							<li>Ste prihlásený: " . $_SESSION['username'] . "</li>
							<li>Odhlásiť: <a href='logout.php'>logout</a>.</li>
						</ul>";
			}
			else {
					echo "	<table style='border: 2px solid #939393; padding: 10px; border-radius: 10px; background-color: transparent; margin: 20px 25px 20px 25px; font-size: 12px; color: #939393'>
								<form action='login.php' method='POST' name='form'>
									<tr>
										<td>User:</td>
										<td><input type='text' name='username' value='' style='width: 100px; height: 17px; font-size: 10px;'><td>
									</tr>
									<tr>
										<td>Password:</td>
										<td><input type='password' name='password' value='' style='width: 100px; height: 17px; font-size: 10px'></td>
									</tr>
									<tr>
										<td></td>
										<td style='text-align: right'><input type='submit' name='login' value='Login'></td>
									</tr>
								</form>	
							</table>";

							if ($_SESSION['errorLogin'] == 1) {
											echo "<p style='font-size: 12px; color: #FF0000; margin-top: -10px'>Zadali ste nesprvane heslo</p>";
										}
										else if ($_SESSION['errorLogin'] == 2) {
											echo "<p style='font-size: 12px; color: #FF0000; margin-top: -10px'>Tento uzivatel neexzistuje</p>";
										}
										else if ($_SESSION['errorLogin'] == 3) {
											echo "<p style='font-size: 12px; color: #FF0000; margin-top: -10px'>Zadajte meno a heslo</p>";
										}

							//$_SESSION = array();
							session_destroy();
			}

		?>
	</div>
</div>