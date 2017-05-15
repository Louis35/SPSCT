<?php
function recup_cumul()
 {
 	global $bdd;

 	$req = $bdd->query('SELECT `cumul` FROM `cumul_temps_travail`');
	$reponse = $req->fetchAll();
	$req->closeCursor();
	return $reponse['0']['0'];
 }