<?php
function recup_date()
 {
 	global $bdd;

 	$req = $bdd->prepare('SELECT CURDATE()');
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];

	$req->closeCursor();
 }
 ?>