<h3>Calcule de la charge de travaille</h3>
<p>
	Bienvenu dans l'outil de calcule de charge de travaille,<br/>
	afin de calculer votre charge de travaille vous devez renseigner le temps de travaille que vous disposez en minute <br/> ainsi que le taux de régularité souhaiter (minimum votre objectif)
</p>
<form action="index.php?pageId=cct" method="post">
<p>
	<label for="timeToWork">Combien de temps avez vous de disponible pour travailler</label><br/>
	<select name="timeToWork" id="timeToWork" required>
		<optgroup label="temps conseiler :">
			<option value="<?php echo $temp_de_travail_minute; ?>" selected ><strong><?php
			echo $temp_de_travail_hMin['heure'] . " h ";
			echo $temp_de_travail_hMin['minute'] . " min";
			?></strong></option>
		</optgroup>
		<optgroup label="autres :">
			<option value="30">30 minutes</option>
	   		<option value="60">1 heure</option>
	   		<option value="90">1 heure 30</option>
	   		<option value="120">2 heures</option>
	   		<option value="180">3 heure</option>
		</optgroup>
	</select>
	<br/>
	<br/>
	AUTRE :<br/>
	<input type="number" name="heure" max="6" min="0" step="1" value="0" 
	style="width: 30px;" /> h 
	<input type="number" name="minute" max="59" min="0" step="10" value="0" 
	style="width: 30px;"/> min
</p>
<p>
	REGULARITE :<br/>
	<input type="number" name="regularite" max="100" min="20" step="1" value="21" 
	style="width: 30px;"/>
</p>
<p>
	<input type="submit" value="Calculer"/>
</p>
</form>