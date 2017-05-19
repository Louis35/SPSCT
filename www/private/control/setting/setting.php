<?php
$trimestre = recup_trimestre($_SESSION['Id']);
if(isset($_GET['param']) AND isset($_POST['value']))
{
	switch ($_GET['param']) {
		case 'trimestre':
			set_trimestre_actuel($_POST['value'], $_SESSION['Id']);
			break;

		case 'objectif':
			set_objectif($trimestre, $_POST['value'], $_SESSION['Id']);
		
		default:
			header('location: index.php');
			break;
	}
	header('location: index.php');
}
else
{

	$trimestre = recup_trimestre($_SESSION['Id']);
	$objectif = recup_objectif_moyenne($trimestre, $_SESSION['Id']);

	include("private/control_vues/setting.php");
}