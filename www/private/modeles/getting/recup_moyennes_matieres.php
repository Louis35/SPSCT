<?php
function recup_moyennes_matieres($trimestre, $Id_matiere, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;
 	$Id_matiere = (int) $Id_matiere;

 	$req = $bdd->prepare('SELECT (SUM(Note * coeff) / SUM(coeff)) AS Moyenne 
 						  FROM notes 
 						  WHERE Trimestre = :Trimestre 
 							AND Id_matiere = :Id_matiere
 							AND Id_User = :Id_user');
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>