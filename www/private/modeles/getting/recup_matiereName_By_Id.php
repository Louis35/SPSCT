<?php
function recup_matiereName_By_Id($Id, $Id_user)
 {
 	global $bdd;

 	$Id = (int) $Id;

 	$req = $bdd->prepare('SELECT Matieres FROM matieres WHERE Id = :Id AND Id_User = :Id_user');
 	$req->bindParam(':Id', $Id, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();

	$matieres = $req->fetch();
	$req->closeCursor();

	return $matieres['0'];
 }
 ?>