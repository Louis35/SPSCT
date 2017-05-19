<?php
function add_control($nom, $Id_matiere, $Id_user, $date, $difficulte)
{
	global $bdd;

 	$nom = (string) $nom;
 	$Id_matiere = (int) $Id_matiere;
 	$date = (string) $date;
 	$difficulte = (int) $difficulte;

 	$req = $bdd->prepare('INSERT INTO `control` (`Id_matiere`, `Id_User`, `nom`, `date_control`, `difficulte`) VALUES (:Id_matiere , :Id_user , :nom , :_date , :difficulte )');
 	$req->bindParam(':nom', $nom, PDO::PARAM_STR);
 	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
 	$req->bindParam(':_date', $date, PDO::PARAM_STR);
 	$req->bindParam(':difficulte', $difficulte, PDO::PARAM_INT);
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$matieres = $req->execute();
	$req->closeCursor();
}