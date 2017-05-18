<?php
if(isset($_POST['mail']) AND isset($_POST['pass']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['classe']))
{
	echo "marche";
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
	include("private/control_vues/SignIn.php");
}

?>