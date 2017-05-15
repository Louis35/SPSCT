<?php
$trimestre = recup_trimestre();
$matiere_Id = recup_matiere_Id($trimestre);
if($matiere_Id)
{
	if(isset($_POST['timeToWork']))
	{	
		if ($_POST['heure'] == 0 AND $_POST['minute'] == 0)
		{
			$timeToWork = calcule_timeToWork($_POST['timeToWork'], $_POST['regularite']);
		}
		else
		{
			$time_enter = $_POST['heure'] * 60;
			$time_enter += $_POST['minute'];
			$timeToWork = calcule_timeToWork($time_enter, $_POST['regularite']);
		}
		include("private/control_vues/cct/cct.php");
	}
	elseif (isset($_GET['add'])) 
	{
		add_cumul($_POST['time']);
		print_r($_POST['time']);
		// header('location: index.php');
	}
	else
	{
		$temp_de_travail_minute = calcule_tempDeTravail(recup_trimestre());
		$temp_de_travail_hMin = afficher_heure_minute($temp_de_travail_minute);
		include("private/control_vues/cct/form.php");
	}
		
}
else
{
	header('location: index.php?action=new_matiere&stat=500');
}