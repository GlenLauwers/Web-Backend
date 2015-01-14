
<div class="foto">
	<ul>
		<li><img src="afbeelding/Oef_Collage_Glen_Lauwers.jpg" height= "500" alt="Foto van de dag"></li>
	</ul>
</div>

<div class="info">
	<ul>
		<li>Naam:</li>
		<li>Voornaam:</li>
	</ul>
</div>

<div class="tekst">
	<ul>
		<?php foreach ( $artikels as $artikel_lijst ): ?>
        	<li><h2><?php echo $artikel_lijst['titel'] ?></h2>
           		<ul>
           			<li><p><?php echo $artikel_lijst['inhoud']?></p></li>
            		<li><i><?php echo $artikel_lijst['trefwoorden'] ?></i></li>
           		</ul>
    	<?php endforeach ?>
	</ul>
    
</div>
