<?php
function reset_cumul_travail()
 {
 	global $bdd;

 	$req = $bdd->prepare('UPDATE `cumul_temps_travail` SET `cumul`= 0');
	$req->execute();

	$req->closeCursor();
 }
