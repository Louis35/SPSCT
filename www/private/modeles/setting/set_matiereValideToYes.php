<?php
function set_matiereValideToYes($trimestre, $Id)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id = (int) $Id;

 	$req = $bdd->prepare('UPDATE matieres SET valide = 1 
 						  WHERE Id = :Id AND Trimestre = :Trimestre');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id', $Id, PDO::PARAM_INT);
	$req->execute();
 }
