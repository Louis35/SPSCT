<?php
function add_matiere($name, $trimestre, $coeff, $Id_user)
 {
 	global $bdd;

 	$name = (string) $name;
 	$trimestre = (int) $trimestre;
 	$coeff = (int) $coeff;

 	$req = $bdd->prepare('INSERT INTO matieres(`Matieres`, `Trimestre`, `valide`, `Coeff`, `Id_User`) 
 						  VALUES (:name, :trimestre, 0, :coeff, :Id_user)');
 	$req->bindParam(':trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':name', $name, PDO::PARAM_STR);
 	$req->bindParam(':coeff', $coeff, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$matieres = $req->execute();
	$req->closeCursor();
 }
 ?>