<h1>Inscription</h1>
<div id="champ_de_connexion">
	<?php
	if(isset($erreur))
	{
		echo "<p><strong>Les mots de passes de correspondent pas !</strong><br /></p>";
	}
	?>
	<form method="POST" action="index.php?go=sign_in">
		<label for="nom">Nom :  </label>
		<input type="text" name="nom" required />
		<br />
		<br />
		<label for="prenom">Prénom :  </label>
		<input type="text" name="prenom" required />
		<br />
		<br />
		<label for="mail">E-mail :  </label>
		<input type="e-mail" name="mail" required />
		<br />
		<br />
		<label for="pseudo">Pseudo :  </label>
		<input type="text" name="pseudo" required />
		<br />
		<br />
		<label for="classe">Dans quelle classe êtes vous ?</label>
	        <select name="classe" id="classe">
	            <option value="6">6 ème</option>
	            <option value="5">5 ème</option>
	            <option value="4">4 ème</option>
	            <option value="3">3 ème</option>
	            <option value="2">2 nd</option>
	            <option value="1">1 er</option>
	            <option value="0">Terminale</option>
	        </select>
	    <br />
	    <br />
	    <label for="adresse">Adresse :  </label>
		<input type="text" name="adresse" required />
		<br />
		<br />
		<label for="department">Numéro de départment :  </label>
		<input type="number" name="department" min="1" max="101" step="1" required />
		<br />
		<br />
		<label for="pass">Mot de passe : </label>
		<input type="password" name="pass" required />	
		<br />
		<br />
		<label for="pass2">Vérif. Mot de passe : </label>
		<input type="password" name="pass2" required />	
		<br />
		<br />
		<input type="submit" name="Inscription" />
	</form>
	<br />
	<br />
	<a href="index.php" style="text-align: center;">Déjâ un compte ? Connecter vous !</a>
</div>