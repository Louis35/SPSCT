<?php
// exucution des modèles :
$Date_day = recup_date();
$trimestre = recup_trimestre($_SESSION['Id']);
$matiere_Id = recup_matiere_Id($trimestre, $_SESSION['Id']);
// si il a des matières exisatnte :
if($matiere_Id)
{
	$moyenne = recup_moyenne_trimestre($trimestre, recup_matiere_Id($trimestre, $_SESSION['Id']), $_SESSION['Id']);
	$moyenne = round($moyenne, 2);
	$ojectif = recup_objectif_moyenne($trimestre, $_SESSION['Id']);
	// opération sur les données
	$balance = round($moyenne - $ojectif, 2);
	// inclusion du controleur de vue
	include("private/control_vues/Accueil.php");
}
else
{
	header('location: index.php?action=new_matiere&stat=500');
}