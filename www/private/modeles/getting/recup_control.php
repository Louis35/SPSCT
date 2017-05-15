<?php
function recup_control()
{
	global $bdd;

	$req = $bdd->query('SELECT
						    Id_matiere,
						    nom,
						    DATE_FORMAT(date_control, \'%d/%m/%Y\') AS date_c,
						    difficulte
						  FROM
						    control
						  WHERE
						    date_control > NOW()
						  ORDER BY
						    date_control');
	$controles = $req->fetchAll();
	return $controles;
}