<?php
function recup_all_info_user($email)
{
	global $bdd;

	$req = $bdd->prepare('SELECT
						    Id, Nom, Prenom, Classe, num_departement, adresse
						  FROM
						    `users`
						  WHERE
						    email = :email
						    ');
	$req->bindParam(':email', $email, PDO::PARAM_STR);
	$req->execute();
	$result = $req->fetch();
	$req->closeCursor();

	return $result;
}
?>