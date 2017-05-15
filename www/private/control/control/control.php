<?php
if (isset($_GET['action'])) 
{
	if ($_GET['action'] == "post") 
	{
		if (isset($_POST['nom']) AND isset($_POST['matiere']) AND isset($_POST['date']) AND isset($_POST['difficulte'])) 
		{
			add_control($_POST['nom'], $_POST['matiere'], $_POST['date'], $_POST['difficulte']);
			header('location: index.php?pageId=control&action=view');
		}
		else
		{
			// header('location: index.php?pageId=control&action=view');
			print_r($_POST);
		}
	}
	elseif ($_GET['action'] == "view") 
	{
		$controles = recup_control();
		$matieres = recup_all_matieres(recup_trimestre());
		$date = recup_date();
		include("private/control_vues/control.php");
	}
	else
	{
		header('location: index.php?pageId=control&action=view');
	}
}
else
{
	header('location: index.php?pageId=control&action=view');
}