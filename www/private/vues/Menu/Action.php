<h3>Menu action :</h3>
<div id="menu">
	<ul>
		<li><a href="index.php?pageId=setting">Paramètres</a></li>
		<li><a href="index.php?action=post_grade">Ajouter une notes</a></li>
	</ul>
	<br />
	<strong><?php echo $_SESSION['Nom'] . " " . $_SESSION['Prenom'] ?></strong><br />
	<a href="index.php?action=deco">Deconnexion</a>
</div>