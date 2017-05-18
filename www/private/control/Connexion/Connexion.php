<?php
if(isset($_POST['mail']) AND isset($_POST['pass']))
{
	if(Verif_User_Pass($_POST['mail'], $_POST['pass']))
	{
		// setting session
		$Info = recup_all_info_user($_POST['mail']);
		$_SESSION['Id'] = $Info['Id'];
		$_SESSION['Nom'] = $Info['Nom'];
		$_SESSION['Prenom'] = $Info['Prenom'];
		$_SESSION['Classe'] = $Info['Classe'];
		$_SESSION['num_departement'] = $Info['num_departement'];
		$_SESSION['adresse'] = $Info['adresse'];
		header('location: index.php');
	}
	else
	{
		// erreur ... redirect
		header('location: index.php?er=1');
	}
}
else
{
	if(isset($_GET['er']))
	{
		$erreur = true;
	}
	else
	{
		$erreur = false;
	}
	include("private/control_vues/connect.php");
}

?>