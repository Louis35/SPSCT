<h3>Accueil</h3>
<p>
	Bonjour, bienvenu sur SPSCT.<br/>
	<em>Suivi Perdormance Scolaire et Charge de Travail</em>
</p>
<ul style="margin: auto; width: 140px;">
	<li>Objectif : <strong><?php echo $ojectif; ?></strong></li>
	<li>Moyenne : <strong><?php echo $moyenne; ?></strong></li>
	<li>Balance : <?php 
		if($balance > 0){ ?><strong style="color: green;"><?php }
		elseif ($balance < 0){ ?><strong style="color: red;"><?php }
		echo $balance;
		?></strong></li>
</ul>