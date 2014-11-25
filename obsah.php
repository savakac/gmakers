	<div>
		<p class="MpNadpis">
			O mne
		</p>
		<p class="MpText">Vitajte na mojej stranke. Volam sa Ján Salva. Narodil som sa v meste Ružomberok. Na tejto stránke môžete nachádzat programy, tutoriáli, a zaujímavé články ktoré sem budem postupne pridávať. Samozrejme ak budem mať čas niečo písať.</p>
		<p class="MpText">Pre svoje projekty sa snažím využívať <a href="http://ww.nette.org">Nette Framework</a>. Pre skladovanie dát používam databázu MySQL. Vyznám sa v konštrukciách HTML, JavaScript, aj CSS, ale považujem sa viac za programátora ako kódera. Medzi moje dalšie záujmy patrí programovanie desktopových aplikácií v jazykoch Java, C, C++. Mám skúsenosti so systémom Linux a prevádzkov maleho web serveru.</p>
	</div>

	<center>
		<table class="MpTime">
			<tr>
				<td class="MpTime">Aktuálny čas:</td>
				<td class="MpTime" id="MyClock">Chyba<script language='JavaScript' type='text/javascript'>Tick()</script></td>
			</tr>
			<tr>
				<td class="MpTime">Tyždeň v roku:</td>
				<td class="MpTime">
					<?php 
						echo date('W') . "."; 
					?>
				</td>
			</tr>
			<tr>
				<td class="MpTime">Dnes je:</td>
				<td class="MpTime">
					<?php 
						if (date('l') == 'Monday') 
							echo "Pondelok"; 
						elseif (date('l') == 'Tuesday') 
							echo "Utorok"; 
						elseif(date('l') == 'Wednesday') 
							echo "Streda"; 
						elseif (date('l') == 'Thursday') 
							echo "Štvrtok"; 
						elseif(date('l') == 'Friday') 
							echo "Piatok"; 
						elseif(date('l') == 'Saturday') 
							echo "Sobota"; 
						else echo "Nedela" 
					?>
				</td>
			</tr>
		</table>
	</center>

	<!--
	<center>
		<iframe style="margin-top: 100px" width="500" height="360" src="http://www.youtube.com/embed/Kg9F5pN5tlI?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
	</center>
	-->
