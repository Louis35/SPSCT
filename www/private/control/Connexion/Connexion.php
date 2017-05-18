<?php
if(isset($_POST['mail']) AND isset($_POST['pass']))
{
	if(Verif_User_Pass($_POST['mail'], $_POST['pass']))
	{
		// setting session
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