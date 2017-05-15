<?php
function recup_day()
 {
 	global $bdd;

 	$req = $bdd->prepare('SELECT DATE_FORMAT(NOW(), \'%w\') AS day');
	$req->execute();
	$rep = $req->fetch();
	return $rep['day'];

	$req->closeCursor();
 }