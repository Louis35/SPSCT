<?php
function recup_objectif_moyenne($trimestre)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT Objetcif FROM objectif_moyenne WHERE Trimestre = :Trimestre ORDER BY Id DESC');

 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>