<?php
function recup_last_grade($trimestre, $Id_matiere)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id_matiere = (int) $Id_matiere;

 	$req = $bdd->prepare('SELECT 
 						    Note, coeff
 						  FROM 
 						    notes 
 						  WHERE 
 						    Trimestre = :trimestre AND Id_matiere = :Id_matiere
 						  ORDER BY 
 						    Date_note DESC
 						    ');
 	$req->bindParam(':trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->execute();
 	

	$laste_grade = $req->fetchAll();
	$req->closeCursor();

	return $laste_grade;
 }
 ?>