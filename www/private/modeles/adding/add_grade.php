<?php
function add_grade($trimestre, $Id_matiere, $Id_User $note, $coeff)
{
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id_matiere = (int) $Id_matiere;
 	$note = (float) $note;
 	$coeff = (float) $coeff;

 	$req = $bdd->prepare('INSERT INTO notes (`Trimestre`, `Id_matiere`, `Id_User` , `Note`, `Coeff`) 
 						  VALUES (:trimestre , :Id_matiere , :Id_user , :note , :coeff )');
 	$req->bindParam(':trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':note', $note, PDO::PARAM_INT);
 	$req->bindParam(':coeff', $coeff, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $coeff, PDO::PARAM_INT);
	$matieres = $req->execute();
	$req->closeCursor();
 }
 ?>