<?php
function add_user($mail, $nom, $prenom, $classe, $adresse, $departement, $pass)
{
 	global $bdd;

 	$mail = (string) $mail;
 	$nom = (string) $nom;
 	$prenom = (string) $prenom;
 	$classe = (int) $classe;
 	$adresse = (string) $adresse;
 	$departement = (int) $departement;
 	$pass = (string) $pass;
 	$pass = sha1($pass);

 	$req = $bdd->prepare('INSERT INTO users (`Nom`, `Prenom`, `Classe`, `num_departement`, `adresse`, `email`, `pass`) 
 						  VALUES (:Nom , :Prenom , :Classe , :department, :adresse, :email, :pass )');
 	$req->bindParam(':Nom', $nom, PDO::PARAM_STR);
 	$req->bindParam(':Prenom', $prenom, PDO::PARAM_STR);
 	$req->bindParam(':Classe', $classe, PDO::PARAM_INT);
 	$req->bindParam(':department', $departement, PDO::PARAM_INT);
 	$req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
 	$req->bindParam(':email', $mail, PDO::PARAM_STR);
 	$req->bindParam(':pass', $pass, PDO::PARAM_STR);
	$matieres = $req->execute();
	$req->closeCursor();

	$req = $bdd->prepare('SELECT Id FROM users WHERE email = :mail');
	$req->bindParam(':mail', $mail, PDO::PARAM_STR);
	$req->execute();
	$Id_user = $req->fetch();
	$req->closeCursor();
	$Id_user =$Id_user['Id'];

	$req = $bdd->prepare('INSERT INTO trimestre_actuel (`Id_User`, `Trimestre`) 
 						  VALUES (:Id_user , 1)');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	$req->closeCursor();

 	$req = $bdd->prepare('INSERT INTO objectif_moyenne (`Id_User`, `Objetcif`, `Trimestre`) 
 						  VALUES (:Id_user , 10, 1)');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	$req->closeCursor();

 	$req = $bdd->prepare('INSERT INTO objectif_moyenne (`Id_User`, `Objetcif`, `Trimestre`) 
 						  VALUES (:Id_user , 10, 2)');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	$req->closeCursor();

 	$req = $bdd->prepare('INSERT INTO objectif_moyenne (`Id_User`, `Objetcif`, `Trimestre`)
 						  VALUES (:Id_user , 10, 3)');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	$req->closeCursor();

 	$req = $bdd->prepare('INSERT INTO cumul (`Id_User`, `cumul`)
 						  VALUES (:Id_user , 0)');
 	$req->bindParam(':Id_user', $Id_user, PDO::PARAM_INT);
 	$req->execute();
 	$req->closeCursor();
 }
 ?>