<?php
function recup_moyennes_matieres($trimestre, $Id_matiere)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id_matiere = (int) $Id_matiere;

 	$req = $bdd->prepare('SELECT (SUM(Note * coeff) / SUM(coeff)) AS Moyenne 
 						  FROM notes 
 						  WHERE Trimestre = :Trimestre 
 							AND Id_matiere = :Id_matiere');
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>