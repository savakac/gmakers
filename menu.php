<!--
<ul>
	<a href="main.php?page=obsah" title="Blog, uvodna stranka">Uvod</a><br>
	<a href="main.php?page=fotky" title="Fotky z akcii">Fotky</a><br>
	<a href="main.php?page=kontakt" title="Email">Kontakt</a></br>
	<a href="main.php?page=fileshare" title="Fileshare">Fileshare</a></br>
	<a href="main.php?page=youtube" title="Youtube">Youtube</a></br>
	<a href="main.php?page=software" title="Software">Software</a></br>
	<a href="login.php" title="Skusobna databaza">Databaza</a>
</ul>
-->

<!--Definicia menu-->
<div style="text-align: center">
<a class="menu" href="main.php?page=obsah" title="Blog, úvodná stránka">Úvod</a>
<a class="menu" href="main.php?page=fotky" title="Fotky z akcií">Fotky</a>
<a class="menu" href="main.php?page=kontakt" title="Email">Kontakt</a>
<a class="menu" href="#" onClick="Display(MenuFileshare)" title="Fileshare">Fileshare</a>
<div id="MenuFileshare" class="submenu" style="display:none">
	<a class="submenu" href="main.php?page=fileshare" title="Fileshare">Fileshare</a><br>
	<a class="submenu" href="#" title="Databaza">Databaza</a><br>
	<a class="submenu" href="#" title="Fyzika">Fyzika</a><br>
</div>
<a class="menu" href="main.php?page=youtube" title="Youtube">Youtube</a>
<a class="menu" href="#" onClick="Display(MenuSoftware)" title="Software">Software</a>
<div id="MenuSoftware" class="submenu" style="display:none">
	<a class="submenu" href="main.php?page=software" title="Software">Software</a><br>
	<a class="submenu" href="main.php?page=bash" title="Zakladne prikazi bash">Bash</a><br>
	<a class="submenu" href="main.php?page=linky" title="Linky">Zaujimave linky</a><br>
</div>
<a class="menu" href="kbook/index.php" title="Skušobná databáza">Databáza</a>
</div>