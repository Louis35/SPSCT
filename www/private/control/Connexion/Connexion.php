<?php
if(isset($_POST['mail']) AND isset($_POST['pass']))
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
	include("private/control_vues/connect.php");
}

?>