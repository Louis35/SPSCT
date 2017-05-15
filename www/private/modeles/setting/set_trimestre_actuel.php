<?php
function set_trimestre_actuel($trimestre)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('UPDATE trimestre_actuel SET Trimestre = :Trimestre');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
	$req->execute();
 }
 ?>