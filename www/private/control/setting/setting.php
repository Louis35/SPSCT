<?php
$trimestre = recup_trimestre();
if(isset($_GET['param']) AND isset($_POST['value']))
{
	switch ($_GET['param']) {
		case 'trimestre':
			set_trimestre_actuel($_POST['value']);
			break;

		case 'objectif':
			set_objectif($trimestre, $_POST['value']);
		
		default:
			header('location: index.php');
			break;
	}
	header('location: index.php');
}
else
{

	$trimestre = recup_trimestre();
	$objectif = recup_objectif_moyenne($trimestre);

	include("private/control_vues/setting.php");
}