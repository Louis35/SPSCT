<?php
function set_trimestre_actuel($trimestre, $Id_user)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('UPDATE trimestre_actuel SET Trimestre = :Trimestre WHERE Id_User = :Id_user');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
 }
 ?>