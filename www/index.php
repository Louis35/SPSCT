<?php
// Connexion à la base de donnee spsct
$bdd = new PDO('mysql:host=localhost;dbname=spsct','root', '');
// $bdd variable de la base de donne a utiliser sur tout le site
include("private/include.php");
if (recup_day() == 1) 
{
	reset_cumul_travail();
}
if(isset($_GET['pageId']))
{
	switch ($_GET['pageId']) 
	{
		#Suivi Perf Scolaire
		case 'sps':
			include_once("private/control/sps/sps.php");
			break;

		#Calcule de Charge de Traille
		case 'cct':
			include_once("private/control/cct/cct.php");
			break;

		case 'setting':
			include_once("private/control/setting/setting.php");
			break;

		case 'control':
			include_once("private/control/control/control.php");
			break;

		default:
			#ACCUEIL
			include_once("private/control/accueil/accueil.php");
			break;
	}
}
elseif (isset($_GET['action']))
{
	switch ($_GET['action']) 
	{
		#ajout note
		case 'post_grade':
			include_once("private/control/post_grade/post_grade.php");
			break;

		case 'new_matiere':
			include_once("private/control/new_matiere/new_matiere.php");
			break;
			
		default:
			#ACCUEIL
			include_once("private/control/accueil/accueil.php");
			break;
	}
}
else
{
	#ACCUEIL
	include_once("private/control/accueil/accueil.php");
}
?>