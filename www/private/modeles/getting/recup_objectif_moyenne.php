<?php
function recup_objectif_moyenne($trimestre, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT Objetcif FROM objectif_moyenne WHERE Trimestre = :Trimestre AND Id_User = :Id_user ORDER BY Id DESC');

 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>