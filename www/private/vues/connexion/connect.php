<p>
	<?php
	if($erreur)
	{
		echo "<strong>mauvaise e-mail ou Mot de passe</strong><br />";
	}
	?>
	<form id="champ_de_connexion">
		<label for="user">e-mail :  </label>
		<input type="mail" name="user" />
		<br />
		<label for="pass">Mot de passe : </label>
		<input type="password" name="pass" />	
	</form>
	<a href="index.php?action=sign_in">Pas de compte ? Créer en un !</a>
</p>