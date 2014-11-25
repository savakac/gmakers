<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>gmakers</title>
	<link rel="shortcut icon" href="image/icon.png"> <!--Iconka stranky-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!--Nastavenie kodovania stranky-->
	<meta name="author" content="Jan Salva"> <!--Autor stranky-->
	<meta name="keywords" content="Jan Salva, Fyzika, Programovanie, C, C++"> <!--Klucove slova-->
	<meta name="description" content="Programy, clanky o programovani, fyzika"> <!--Popis stranky-->

	<link rel="stylesheet" type="text/css" href="style/main.css"> <!--Prilinkovanie externeho suboru so stylmi-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="jsc/main.js"></script>

	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-57052982-1', 'auto');
 	 	ga('send', 'pageview');
	</script>
</head>
<body class="ShowView">
<div class="vonkajsi">
	
	<div class="hlavicka">
		<img src="image/logo.png">
	</div>
	
	<?php include("adminMenu.php"); ?>

	<div class="content">
		<div class="lavy">
			<?php include("menu.php"); ?>
		</div>	

		<div class="obsah">
			<?php
				$page = $_GET["page"];
				$filename = $page . ".php";
				if (file_exists($filename)) {
					include($filename);
				}
				else {
					include("obsah.php");
				}
			?>
		</div>
	</div>
	
	<div class="foot">
		<?php include("footer.php"); ?>
	</div>
	
	<div class="pata">
		Copyright &copy 2010 - <?php echo date('Y'); ?> by <a href="http://www.salva.xf.cz">Jan Salva</a>
	</div>

	<!--Pozadie pri zobrazeni informacnej dlazdice-->
	<div id="infoBackground" class="infoWindo" onclick=showJumpWindow()></div>
	<!--Informacna dlazdica-->
	<div id="infoTable" class="infoWindow">
		<a class="testClass" href="#">Toto je testovaci odkaz</a>
	</div>
	
</div>
</body>
</html>
