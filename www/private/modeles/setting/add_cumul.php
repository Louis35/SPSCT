<?php
function add_cumul($minutes)
 {
 	global $bdd;

 	$minutes = (int) $minutes;

 	$req1 = $bdd->query('SELECT `cumul` FROM `cumul_temps_travail`');
 	$last = $req1->fetch();
 	$last = $last['0'];

 	$new = $minutes + $last;

 	$req = $bdd->prepare('UPDATE `cumul_temps_travail` SET `cumul`= :new');
 	$req->bindParam(':new', $new, PDO::PARAM_INT);
	$req->execute();
 }