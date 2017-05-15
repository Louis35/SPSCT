<?php
if(isset($_POST['matiere_name']) AND isset($_POST['matiere_coeff']))
{
	add_matiere($_POST['matiere_name'], 1, $_POST['matiere_coeff']);
	add_matiere($_POST['matiere_name'], 2, $_POST['matiere_coeff']);
	add_matiere($_POST['matiere_name'], 3, $_POST['matiere_coeff']);
	header('location: index.php?action=post_grade');
}
else
{
	include("private/control_vues/Action/new_matiere.php");
}