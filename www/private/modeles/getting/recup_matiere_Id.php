<?php
function recup_matiere_Id($trimestre, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT Id FROM matieres WHERE Trimestre = :Trimestre AND valide = 1 AND Id_User = :Id_user');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
	$matieres = $req->fetchAll();
	$req->closeCursor();
	return $matieres;
 }
 ?>