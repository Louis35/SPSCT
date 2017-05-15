<!DOCTYPE html>
<html>
<?php
// HEAD
$title_head = "Paramètre - SPSCT";
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
	<h3>paramètre</h3>
	<?php
	if(isset($_GET['param']))
	{
		if($_GET['param'] == "trimestre")
		{
			include("private/vues/setting/trimestre.php");
		}
		elseif($_GET['param'] == "objectif")
		{
			include("private/vues/setting/objectif.php");
		}
	}
	else
	{
		include("private/vues/setting/setting.php");
	}
	?>
	</article>
</section>
</body>
</html>