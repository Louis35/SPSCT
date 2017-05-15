<?php
if(isset($_GET['stat']))
{
	if($_GET['stat'] == 500)
	{
		?>
		<p><strong style="color: red">Aucune matière valide trouver pour ce trimèstre,<br/> veuillez ajouter une matière ou une note afin d'utiliser SPSCT<br/>merci</strong></p>
		<?php
	}
}
?>
<form action="index.php?action=new_matiere" method="post">
	<div>
		<label for="matiere_name">Le nom de la matière :</label><br/>
		<input type="text" name="matiere_name" id="matiere_name" value="" tabindex="1" />
	</div>
	<div>
		<label for="matiere_coeff">Son coeff</label><br/>
		<input type="number" name="matiere_coeff" id="matiere_coeff" min="0" tabindex="1" />
	</div>

	<br/>
	<div>
		<input type="submit" value="Ajouter" />
	</div>
</form>