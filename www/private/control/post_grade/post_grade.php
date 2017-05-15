<?php
if(isset($_POST['matiere']) AND isset($_POST['note']))
{
	add_grade(recup_trimestre(), $_POST['matiere'], $_POST['note'], $_POST['coeff']);
	set_matiereValideToYes(recup_trimestre(), $_POST['matiere']);
	header('location: index.php?action=post_grade&stat=1');
}
else
{
	$matieres = recup_all_matieres(recup_trimestre());
	$objectif = recup_objectif_moyenne(recup_trimestre());
	include("private/control_vues/Action/post_grade.php");
}