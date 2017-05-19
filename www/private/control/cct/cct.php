<?php
$trimestre = recup_trimestre($_SESSION['Id']);
$matiere_Id = recup_matiere_Id($trimestre, $_SESSION['Id']);
if($matiere_Id)
{
	if(isset($_POST['timeToWork']))
	{	
		if ($_POST['heure'] == 0 AND $_POST['minute'] == 0)
		{
			$timeToWork = calcule_timeToWork($_POST['timeToWork'], $_POST['regularite'], $_SESSION['Id']);
		}
		else
		{
			$time_enter = $_POST['heure'] * 60;
			$time_enter += $_POST['minute'];
			$timeToWork = calcule_timeToWork($time_enter, $_POST['regularite'], $_SESSION['Id']);
		}
		include("private/control_vues/cct/cct.php");
	}
	elseif (isset($_GET['add'])) 
	{
		add_cumul($_POST['time'], $_SESSION['Id']);
		header('location: index.php');
	}
	else
	{
		$temp_de_travail_minute = calcule_tempDeTravail(recup_trimestre($_SESSION['Id']), $_SESSION['Id']);
		$temp_de_travail_hMin = afficher_heure_minute($temp_de_travail_minute);
		include("private/control_vues/cct/form.php");
	}
		
}
else
{
	header('location: index.php?action=new_matiere&stat=500');
}