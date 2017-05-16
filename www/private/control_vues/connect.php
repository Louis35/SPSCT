<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "Accueil - SPSCT";
include("private/vues/head/std.php");
?>
<body>
<?php
// HEADER
$title_header = "SPSCT";
$page_actu = "accueil";
include("private/vues/header/std.php");
?>
<section>
	<?php
	// ARTICLE TYPE 1
	?>
	<article id="type_2-1">
	<?php
	include("private/vues/Accueil/art_1.php");
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