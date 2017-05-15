<?php
function recup_matieres($trimestre)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT Id, Matieres FROM matieres 
 						  WHERE Trimestre = :Trimestre AND valide = 1');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->execute();
	$matieres = $req->fetchAll();
	$req->closeCursor();
	return $matieres;
 }
 ?>