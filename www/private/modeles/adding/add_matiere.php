<?php
function add_matiere($name, $trimestre, $coeff)
 {
 	global $bdd;

 	$name = (string) $name;
 	$trimestre = (int) $trimestre;
 	$coeff = (int) $coeff;

 	$req = $bdd->prepare('INSERT INTO matieres(`Matieres`, `Trimestre`, `valide`, `Coeff`) 
 						  VALUES (:name, :trimestre, 0, :coeff)');
 	$req->bindParam(':trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':name', $name, PDO::PARAM_STR);
 	$req->bindParam(':coeff', $coeff, PDO::PARAM_INT);
	$matieres = $req->execute();
	$req->closeCursor();
 }
 ?>