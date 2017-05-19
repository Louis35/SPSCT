<?php
function recup_nbrMatiere($trimestre, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT COUNT(*) AS nbrMatiere FROM matieres 
 						  WHERE Trimestre = :Trimestre AND valide = 1 AND Id_User = :Id_user');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	$req->closeCursor();
 	return $reponse['nbrMatiere'];
 }
 ?>