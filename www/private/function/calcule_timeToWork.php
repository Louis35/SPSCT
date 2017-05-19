<?php
function calcule_timeToWork($timeToWork, $regularite = 21, $Id_user)
{
	// tableau des Points a rattraper
	$PR_;
	// tableau des coeff pr_
	$PRsurSOM_;
	// tableau point control (c_)
	$c_;
	// tableau coeff control (cf_c)
	$cf_c;
	// tableau des moyennes des coeff
	$coeff_generale;
	// tableau resultat
	$timeToWork_;
	$trimestre = recup_trimestre($Id_user);
	$matiereId = recup_matiere_Id($trimestre, $Id_user);
	// calcule des point a ratraper
	foreach ($matiereId as $Id) 
	{
		$PR_[] = $regularite - recup_moyennes_matieres($trimestre, $Id['Id'], $Id_user);
	}
	// calcule de la somme afin de calculer les coeff pr_
	$sommme_PR = 0;
	foreach ($PR_ as $value) 
	{
		$sommme_PR = $sommme_PR + $value;
	}
	// calcule des coeff pr_
	foreach ($PR_ as $value) 
	{
		$PRsurSOM_[] = round($value / $sommme_PR, 2);
	}
	// vérification de l'éxistance de controle
	if (is_control_exist($Id_user))
	{
		// calcule c_ de control
		foreach ($matiereId as $Id)
		{
			$controls = recup_control_proche($Id['Id'], $Id_user);
			$sous_c_ = 0;
			foreach ($controls as $value)
			{
				$temp_ = 0;
				$temp_ = 8 - $value['J_Restant'];
				$temp_ = $value['difficulte'] / 2 * $temp_;
				$sous_c_ = $sous_c_ + $temp_;
			}
			$c_[] = $sous_c_;
		}
		$somme_c = 0;
		foreach ($c_ as $value) 
		{
			$somme_c += $value;
		}
		// calcule cf_c coeff de controle
		foreach ($c_ as $value) 
		{
			$cf_c[] = $value / $somme_c;
		}
		// moyenne des coeff
		foreach ($PRsurSOM_ as $key => $value) 
		{
			$temp = $value + $cf_c[$key];
			$coeff_generale[] = $temp / 2;
		}
	}
	else
	{
		foreach ($PRsurSOM_ as $key => $value) 
		{
			$coeff_generale[] = $value;
		}
	}
	
	// tableau du rendu $timeToWork
	foreach ($coeff_generale as $key => $value) 
	{
		$timeToWork_['matiere'][] = recup_matiereName_By_Id($matiereId[$key]['Id'], $Id_user);
		$timeToWork_['minute'][] = round($value * $timeToWork);
	}
	return $timeToWork_;
}