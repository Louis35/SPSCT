<?php
function reset_cumul_travail($Id_user)
 {
 	global $bdd;

 	$req = $bdd->prepare('UPDATE `cumul_temps_travail` SET `cumul`= 0 WHERE Id_User = :Id_user');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();

	$req->closeCursor();
 }
