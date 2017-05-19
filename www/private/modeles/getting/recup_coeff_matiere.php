<?php
function recup_coeff_matiere($Id_matiere, $Id_user)
 {
 	global $bdd;

 	$Id_matiere = (int) $Id_matiere;
 	$Id_user = (int) $Id_user;

 	$req = $bdd->prepare('SELECT Coeff
 						  FROM matieres
 						  WHERE Id = :Id_matiere AND Id_User = :Id_user');
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>