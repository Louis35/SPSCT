<?php
function recup_last_grade($trimestre, $Id_matiere, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id_matiere = (int) $Id_matiere;

 	$req = $bdd->prepare('SELECT 
 						    Note, coeff
 						  FROM 
 						    notes 
 						  WHERE 
 						    Trimestre = :trimestre AND Id_matiere = :Id_matiere AND Id_User = :Id_user
 						  ORDER BY 
 						    Date_note DESC
 						    ');
 	$req->bindParam(':trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	

	$laste_grade = $req->fetchAll();
	$req->closeCursor();

	return $laste_grade;
 }
 ?>