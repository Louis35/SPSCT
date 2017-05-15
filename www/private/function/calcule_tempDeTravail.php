<?php
function calcule_tempDeTravail($trimestre)
{
	$objectif = recup_objectif_moyenne($trimestre);
	$pr = $objectif - round(recup_moyenne_trimestre($trimestre), 1);
	$travailParJours = $pr * 20;
	$travailParSemaine = $travailParJours * 7;
	$cumul = recup_cumul();
	$TravailRestant = $travailParSemaine - $cumul;
	$travailDuJour = $TravailRestant / nombre_jours_restant_lundi();
	$travailDuJour = round($travailDuJour, 0);
	return 60 + $travailDuJour;
}