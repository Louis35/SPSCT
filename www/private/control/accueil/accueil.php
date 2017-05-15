<?php
// exucution des modèles :
$Date_day = recup_date();
$trimestre = recup_trimestre();
$matiere_Id = recup_matiere_Id($trimestre);
// si il a des matières exisatnte :
if($matiere_Id)
{
	$moyenne = recup_moyenne_trimestre($trimestre, recup_matiere_Id($trimestre));
	$moyenne = round($moyenne, 2);
	$ojectif = recup_objectif_moyenne($trimestre);
	// opération sur les données
	$balance = round($moyenne - $ojectif, 2);
	// inclusion du controleur de vue
	include("private/control_vues/Accueil.php");
}
else
{
	header('location: index.php?action=new_matiere&stat=500');
}