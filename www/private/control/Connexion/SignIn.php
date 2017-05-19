<?php
if(isset($_POST['mail']) AND isset($_POST['pass']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['classe']) AND isset($_POST['adresse']) AND isset($_POST['department']) AND isset($_POST['pass2']))
{
	if($_POST['pass'] == $_POST['pass2'])
	{
		add_user($_POST['mail'], $_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['adresse'] ,$_POST['department'], $_POST['pass']);
		header('location: index.php?back=account_create');
	}
	else
	{
		header('location: index.php?er=pass');
	}
}
else
{
	if(isset($_GET['er']))
	{
		$erreur = $_GET['er'];
	}
	include("private/control_vues/SignIn.php");
}

?>