<?php
function recup_cumul($Id_user)
 {
 	global $bdd;

 	$Id_user = (int) $Id_user;

 	$req = $bdd->prepare('SELECT `cumul` FROM `cumul_temps_travail` WHERE Id_User = :Id_user');
	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetchAll();
	$req->closeCursor();
	return $reponse['0']['0'];
 }