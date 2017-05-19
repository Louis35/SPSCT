<?php
function recup_moyenne_trimestre($trimestre, $Id_user)
 {
 	$Id_matieres = recup_matiere_Id($trimestre, $Id_user);
 	$trimestre = (int) $trimestre;
 	$tableau_moyenne;
 	$tableau_coeff;
 	$sommes_moyenne = 0;
 	$sommes_coeff = 0;
 	foreach ($Id_matieres as $value) 
 	{
 		$tableau_moyenne[] = recup_moyennes_matieres($trimestre, $value['Id'], $Id_user);
 		$tableau_coeff[] = recup_coeff_matiere($value['Id'], $Id_user);
 	}
 	foreach ($tableau_moyenne as $key => $value) 
 	{
 		$value2 = $value * $tableau_coeff[$key];
 		$sommes_moyenne = $sommes_moyenne + $value2;
 	}
 	foreach ($tableau_coeff as $value) 
 	{
 		$sommes_coeff = $sommes_coeff + $value;
 	}
 	$moyenne = round($sommes_moyenne / $sommes_coeff, 2);
 	return $moyenne;
 }
 ?>