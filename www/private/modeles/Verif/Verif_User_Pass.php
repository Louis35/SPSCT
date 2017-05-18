<?php
function Verif_User_Pass($email, $pass)
{
	global $bdd;

	$pass = sha1($pass);

	$req = $bdd->prepare('SELECT
						    `Id`
						  FROM
						    `users`
						  WHERE
						    pass = :pass AND email = :email
						    ');
	$req->bindParam(':pass', $pass, PDO::PARAM_STR);
	$req->bindParam(':email', $email, PDO::PARAM_STR);
	$req->execute();
	$result_Id = $req->fetchAll();
	$req->closeCursor();

	if ($result_Id) 
	{
		return true;
	}
	else
	{
		return false;
	}
}