<h1>Connexion</h1>
<p>
	<?php

	if($erreur)
	{
		echo "<strong>mauvaise e-mail ou Mot de passe</strong><br />";
	}
	if(isset($_GET['back']))
	{
		echo "<strong>Compte créer ! Vous pouver maintenant vous connecter :</strong><br />";
	}
	?>
	<form method="POST" action="index.php" id="champ_de_connexion">
		<label for="mail">e-mail :  </label>
		<input type="email" name="mail" required />
		<br />
		<label for="pass">Mot de passe : </label>
		<input type="password" name="pass" required />
		<br />
		<input type="submit" name="Connexion" />
	</form>
	<a href="index.php?go=sign_in">Pas de compte ? Créer en un !</a>
</p>