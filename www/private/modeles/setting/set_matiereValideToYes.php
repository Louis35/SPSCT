<?php
function set_matiereValideToYes($trimestre, $Id, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id = (int) $Id;

 	$req = $bdd->prepare('UPDATE matieres SET valide = 1 
 						  WHERE Id = :Id AND Trimestre = :Trimestre AND Id_User = :Id_user');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id', $Id, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
 }
