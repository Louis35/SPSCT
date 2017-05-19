<?php
function add_cumul($minutes, $Id_user)
 {
 	global $bdd;

 	$minutes = (int) $minutes;

 	$req1 = $bdd->prepare('SELECT `cumul` FROM `cumul_temps_travail` WHERE Id_User = :Id_user');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$last = $req1->fetch();
 	$last = $last['0'];

 	$new = $minutes + $last;

 	$req = $bdd->prepare('UPDATE `cumul_temps_travail` SET `cumul`= :new WHERE Id_User = :Id_user');
 	$req->bindParam(':new', $new, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
 }