<?php
function recup_nbrMatiere($trimestre)
 {
 	global $bdd;

 	$trimestre = (int) $trimestre;

 	$req = $bdd->prepare('SELECT COUNT(*) AS nbrMatiere FROM matieres 
 						  WHERE Trimestre = :Trimestre AND valide = 1');
 	$req->bindParam(':Trimestre', $trimestre, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	$req->closeCursor();
 	return $reponse['nbrMatiere'];
 }
 ?>