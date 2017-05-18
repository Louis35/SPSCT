<?php
if (isset($_POST['pass']))
{
    $pass_crypte = sha1($_POST['pass']); // On hash le mot de passe

    echo '<p>hash du mdp :<br />' . $pass_crypte . '</p>';
}

else // On n'a pas encore rempli le formulaire
{
?>

<p>Entrez votre login et votre mot de passe pour le crypter.</p>

<form method="post">
    <p>
        Mot de passe : <input type="text" name="pass"><br /><br />
    
        <input type="submit" value="Crypter !">
    </p>
</form>

<?php
}
?>