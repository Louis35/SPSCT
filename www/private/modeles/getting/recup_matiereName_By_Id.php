<?php
function recup_matiereName_By_Id($Id)
 {
 	global $bdd;

 	$Id = (int) $Id;

 	$req = $bdd->prepare('SELECT Matieres FROM matieres WHERE Id = :Id');
 	$req->bindParam(':Id', $Id, PDO::PARAM_INT);
 	$req->execute();

	$matieres = $req->fetch();
	$req->closeCursor();

	return $matieres['0'];
 }
 ?>