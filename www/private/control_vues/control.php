<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "Controle - SPSCT";
include("private/vues/head/std.php");
?>
<body>
<?php
// HEADER
$title_header = "SPSCT";
$page_actu = "control";
include("private/vues/header/std.php");
?>
<section>
	<?php
	// ARTICLE TYPE 1
	?>
	<article id="type_1">
	<?php
	include("private/vues/control/control.php");
	?>
	</article>
</section>
</body>
</html>