<?php
function set_objectif($trimstre, $new_objectif)
 {
 	global $bdd;

 	$new_objectif = (int) $new_objectif;
 	$trimstre = (int) $trimstre;

 	$req = $bdd->prepare('UPDATE objectif_moyenne SET Objetcif = :new_obj 
 						  WHERE Trimestre = :trimstre');
 	$req->bindParam(':trimstre', $trimstre, PDO::PARAM_INT);
 	$req->bindParam(':new_obj', $new_objectif, PDO::PARAM_INT);
	$req->execute();
 }