<?php
function recup_control_proche($Id_matiere, $Id_user)
{
	global $bdd;

	$Id_matiere = (int) $Id_matiere;

	$req = $bdd->prepare('SELECT
						    `Id_matiere`,
						    DATEDIFF(date_control,NOW()) AS J_Restant,
						    `difficulte`
						  FROM
						    `control`
						  WHERE
						    date_control BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)
						    AND Id_matiere = :Id_matiere
						    AND Id_User = :Id_user');
	$req->bindParam(':Id_matiere', $Id_matiere, PDO::PARAM_INT);
	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$controles = $req->fetchAll();
	return $controles;
}