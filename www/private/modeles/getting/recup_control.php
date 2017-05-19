<?php
function recup_control($Id_user)
{
	global $bdd;

	$req = $bdd->prepare('SELECT
						    Id_matiere,
						    nom,
						    DATE_FORMAT(date_control, \'%d/%m/%Y\') AS date_c,
						    difficulte
						  FROM
						    control
						  WHERE
						    date_control > NOW()
						    AND Id_User = :Id_user
						  ORDER BY
						    date_control');
	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$controles = $req->fetchAll();
	return $controles;
}