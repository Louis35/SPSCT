<?php
function is_control_exist($Id_user)
{
	global $bdd;

	$req = $bdd->prepare('SELECT
						    `Id_matiere`
						  FROM
						    `control`
						  WHERE
						    Id_User = :Id_user AND
						    date_control BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)
						    ');
	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
	$req->execute();
	$controles = $req->fetchAll();

	if ($controles) 
	{
		return true;
	}
	else
	{
		return false;
	}
}