<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "Ajouter une note - SPSCT";
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
	// ARTICLE TYPE 1
	?>
	<article id="type_1">
		<?php
		include("private/vues/post_grade/post.php");
		?>
	</article>
</section>
</body>
</html>