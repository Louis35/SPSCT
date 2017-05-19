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
 }
 ?>