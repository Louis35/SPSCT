<?php
// tableau des moyennes
$trimestre = recup_trimestre($_SESSION['Id']);
$matiere_Id = recup_matiere_Id($trimestre, $_SESSION['Id']);
// si il a des matières exisatnte :
if($matiere_Id)
{
	$moyenne = recup_moyenne_trimestre($trimestre, $matiere_Id, $_SESSION['Id']);
	$tableau_matieres;
	$tableau_matieres_Id;
	$tableau_moyennes;
	// crétion du tableau contenant les moyennes
	foreach ($matiere_Id as $value) 
	{
		$tableau_matieres[] = recup_matiereName_By_Id($value['0'], $_SESSION['Id']);
		$tableau_matieres_Id[] = $value['0'];
		$tableau_moyennes[] = recup_moyennes_matieres($trimestre ,$value['0'], $_SESSION['Id']);
	}
	include("private/control_vues/SPS.php");
}
else
{
	header('location: index.php?action=new_matiere&stat=500');
}