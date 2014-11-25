<?php 
	session_start();
?>

<?php if ($_SESSION['username']): ?>

<div class="adminMenu">
	<div style="float: left; width: 150px; text-align: center">Admin login</div>
		<!--
		<div class="hMenu" onClick="testClick1()">
			Item 1
			<div id="adminMenu1" class="hSubMenu" style="display: none">
				<a href="#" style="align:center">Items 1</a>
				<a href="#" style="align:center">Items 2</a>
			</div>
		</div>

		<div class="hMenu" onClick="testClick2()">
			Item 1
			<div id="adminMenu2" class="hSubMenu" style="display: none">
				<a href="#" style="align:center">Items 1</a>
				<a href="#" style="align:center">Items 2</a>
			</div>
		</div>

		<div class="hMenu" onClick="testClick3()">
			Item 1
			<div id="adminMenu3" class="hSubMenu" style="display: none">
				<a href="#" style="align:center">Items 1</a>
				<a href="#" style="align:center">Items 2</a>
			</div>
		</div>
		-->
		<ul id="nav">
			<li><a href="#" onclick=showJumpWindow()>Item</a></li>
			<li><a href="#">Item</a>
				<ul>
					<li><a href="#">Item</a></li>
					<li><a href="#">Item</a></li>
					<li><a href="#">Item</a>
						<ul>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
							<li><a href="#">Item</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="#">Item</a>
				<ul>
					<li><a href="#">Item</a></li>
					<li><a href="#">Item</a></li>
				</ul>
			</li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
</div>

<?php endif ?>