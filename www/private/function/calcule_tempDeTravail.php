<?php
function calcule_tempDeTravail($trimestre, $Id_user)
{
	$objectif = recup_objectif_moyenne($trimestre, $Id_user);
	$pr = $objectif - round(recup_moyenne_trimestre($trimestre, $Id_user), 1);
	$travailParJours = $pr * 20;
	$travailParSemaine = $travailParJours * 7;
	$cumul = recup_cumul($Id_user);
	$TravailRestant = $travailParSemaine - $cumul;
	$travailDuJour = $TravailRestant / nombre_jours_restant_lundi();
	$travailDuJour = round($travailDuJour, 0);
	return 60 + $travailDuJour;
}