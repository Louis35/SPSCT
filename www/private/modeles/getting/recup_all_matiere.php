<?php
function recup_all_matieres($trimestre, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT Id, Matieres FROM matieres 
 						  WHERE Trimestre = :Trimestre AND Id_User = :Id_user');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
	$matieres = $req->fetchAll();
	$req->closeCursor();
	return $matieres;
 }