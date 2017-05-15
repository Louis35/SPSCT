<?php
function is_control_exist()
{
	global $bdd;

	$req = $bdd->prepare('SELECT
						    `Id_matiere`
						  FROM
						    `control`
						  WHERE
						    date_control BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 7 DAY)
						    ');
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