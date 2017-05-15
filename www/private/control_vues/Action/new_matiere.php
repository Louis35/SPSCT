<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "ajouter une matiere - SPSCT";
include("private/vues/head/std.php");
?>
<body>
<?php
// HEADER
$title_header = "SPSCT";
$page_actu = "none";
include("private/vues/header/std.php");
?>
<section>
	<?php
	// ARTICLE TYPE 2
	?>
	<article id="type_2-1">
	<h3>Ajout d'une nouvelle matiere : </h3>
	<?php
	include("private/vues/new_matiere/form_new_mat.php");
	?>
	</article>
	<article id="type_2-2">
		<?php
		include("private/vues/Menu/Action.php");
		?>
	</article>
</section>
</body>
</html>