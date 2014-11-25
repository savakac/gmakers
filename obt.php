<div class="back">
<a href="main.php?page=uvod" title="Uvodna stranka"><<</a>
</div>
<h2>Obnova Grub-u v Ubuntu</h2>
<p>				
	Takže tento zapisok píšem hlavne kôli sebe, ale može poslúžiť aj druhým, ktorí sa budú snažiť o obnovu zavadzacieho systemu grub.<br>
	Je to jednoduché:<br>
	1. Naštartovať systém z live usb, prepnúť sa do shelu pomocov ALT+F1<br>
	2. Spustiť nasledujúce príkazy<br><br>
</p>
<div class="section">
	sudo mount/dev/sda5/mnt<br>
	sudo mount --bind/dev/mnt/dev<br>
	sudo mount --bind/proc/mnt/proc<br>
	sudo mount --bind/sys/mnt/sys<br>
	sudo chroot/mnt<br>
	grub-install/dev/sda<br>
	grub-insatll --recheck/dev/sda<br>
	update-grub<br><br>
</div>
<p>	
	Particie na disku sa možu líšiť. Rozloženie našich partícii zistíme pomocou prikazu fdisk -l. To by bolo pre dnesok vsetko. Nabuduce to bude 		dufam dlchsie.			
</p>		
