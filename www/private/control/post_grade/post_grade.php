<?php
if(isset($_POST['matiere']) AND isset($_POST['note']))
{
	add_grade(recup_trimestre($_SESSION['Id']), $_POST['matiere'], $_POST['note'], $_POST['coeff'], $_SESSION['Id']);
	set_matiereValideToYes(recup_trimestre($_SESSION['Id']), $_POST['matiere'], $_SESSION['Id']);
	header('location: index.php?action=post_grade&stat=1');
}
else
{
	$matieres = recup_all_matieres(recup_trimestre($_SESSION['Id']), $_SESSION['Id']);
	$objectif = recup_objectif_moyenne(recup_trimestre($_SESSION['Id']), $_SESSION['Id']);
	include("private/control_vues/Action/post_grade.php");
}