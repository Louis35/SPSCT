<?php
function recup_coeff_matiere($Id_matiere)
 {
 	global $bdd;

 	$Id_matiere = (int) $Id_matiere;

 	$req = $bdd->prepare('SELECT Coeff
 						  FROM matieres
 						  WHERE Id = :Id_matiere');
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
	$req->execute();
	$reponse = $req->fetch();
	return $reponse['0'];
	$req->closeCursor();
 }
 ?>