<?php
function afficher_heure_minute($minute)
{
	$heure = 0;
	while ($minute > 59) 
	{
		$heure ++;
		$minute -= 60;
	}
	$retour['heure'] = $heure;
	$retour['minute'] = $minute;

	return $retour;
}