<?php
if(isset($_GET['er']))
{
	$erreur = true;
}
else
{
	$erreur = false;
}
include("private/control_vues/connect.php");
?>