<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "SPS - SPSCT";
include("private/vues/head/std.php");
?>
<body>
<?php
// HEADER
$title_header = "SPSCT";
$page_actu = "sps";
include("private/vues/header/std.php");
?>
<section>
	<?php
	// ARTICLE TYPE 1
	?>
	<article id="type_2-1">
	<h3>Moyennes et notes</h3>
	<?php
	include("private/vues/SPS/table_moyennes.php");
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