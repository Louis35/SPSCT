<?php
function recup_trimestre()
 {
 	global $bdd;

 	$req = $bdd->query('SELECT Trimestre FROM trimestre_actuel');
 	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>