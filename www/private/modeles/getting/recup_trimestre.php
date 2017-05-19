<?php
function recup_trimestre($Id_user)
 {
 	global $bdd;

 	$req = $bdd->prepare('SELECT Trimestre FROM trimestre_actuel WHERE Id_User = :Id_user');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>