<h3>Ajouter une note</h3>
<p>
	Ici vous pouvez ajouter votre note reçu à un contrôle afin qu'il soit pris en compte dans les différentes parties de la platforme.<br/>
	Pour cela il vous faut indiquer à quel trimestre la note devra être ajouter, dans quel matière avez vous eu cette notes et bien entendu la note elle même qui devra être sur 20.<br/>
	Si une matière n'éxiste pas vous pouvez l'ajouter
</p>
<?php
if(isset($_GET['stat']))
{
	?>
<p><strong style="color: green">Note ajouter !</strong></p>
	<?php
}
?>
<form action="index.php?action=post_grade" method="post">
<p>
	<label for="matiere">Matière :</label><br />
   	<select name="matiere" id="matiere" required>
   	<?php
   		foreach ($matieres as $matiere) 
   		{
   			echo '<option value="' . $matiere['Id'] . '">' . $matiere['Matieres'] . '</option>';
   		}
     ?>
	</select>
	<br/><a href="index.php?action=new_matiere">la matière voulu n'est pas la</a>
</p>
<p>
	<label for="note">Note :</label><br/>
	<input type="number" name="note" id="note" min="0" max="20" step="0.25" value="<?php echo($objectif);?>" required />
</p>
<p>
	<label for="coeff">Coeff :</label><br/>
	<input type="number" name="coeff" id="coeff" min="0" max="2" step="0.25" value="1" />
</p>	<div>
		<input type="submit" value="Ajouter" />
	</div>
</form>