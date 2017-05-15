<?php
// ADDING
include_once("private/modeles/adding/add_grade.php");
include_once("private/modeles/adding/add_matiere.php");
include_once("private/modeles/adding/add_control.php");
// GETTING
include_once("private/modeles/getting/recup_all_matiere.php");
include_once("private/modeles/getting/recup_date.php");
include_once("private/modeles/getting/recup_last_grade.php");
include_once("private/modeles/getting/recup_matiere_Id.php");
include_once("private/modeles/getting/recup_matiereName_By_Id.php");
include_once("private/modeles/getting/recup_matieres.php");
include_once("private/modeles/getting/recup_moyenne_trimestre.php");
include_once("private/modeles/getting/recup_moyennes_matieres.php");
include_once("private/modeles/getting/recup_nbrMatiere.php");
include_once("private/modeles/getting/recup_objectif_moyenne.php");
include_once("private/modeles/getting/recup_trimestre.php");
include_once("private/modeles/getting/recup_control.php");
include_once("private/modeles/getting/recup_control_proche.php");
include_once("private/modeles/getting/is_control_exist.php");
include_once("private/modeles/getting/recup_day.php");
include_once("private/modeles/getting/recup_cumul.php");
include_once("private/modeles/getting/recup_coeff_matiere.php");
// SETTING
include_once("private/modeles/setting/set_matiereValideToYes.php");
include_once("private/modeles/setting/set_objectif.php");
include_once("private/modeles/setting/set_trimestre_actuel.php");
include_once("private/modeles/setting/reset_cumul_travail.php");
include_once("private/modeles/setting/add_cumul.php");
// FUNCTION
include_once("private/function/calcule_timeToWork.php");
include_once("private/function/afficher_heure_minute.php");
include_once("private/function/calcule_tempDeTravail.php");
include_once("private/function/nombre_jours_restant_lundi.php");