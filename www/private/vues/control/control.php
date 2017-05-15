<h3>planning control</h3>
<div id="table_controles">
	<table id="type_1">
		<thead>
			<tr>
				<th>matière</th>
				<th>date du control</th>
				<th>nom</th>
				<th>difficulté</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($controles as $control)
			{
				echo "<tr><td>";
				echo recup_matiereName_By_Id($control['Id_matiere']) . "</td><td>";
				echo $control['date_c'] . "</td><td>";
				echo $control['nom'] . "</td><td>";
				echo $control['difficulte'] . "</td></tr>";
			}
			?>
		</tbody>
	</table>
</div>
<div id="form_control">
	<h4>Plannifier un controle :</h4>
	<form action="index.php?pageId=control&amp;action=post" method="post">

		<label for="matiere">Matière : </label>
		<select name="matiere" id="matiere" required>
		<?php
			foreach ($matieres as $matiere) 
   			{
   				echo '<option value="' . $matiere['Id'] . '">' . $matiere['Matieres'] . '</option>';
   			}
   		?>
		</select>

		<label for="nom">Nom : </label>
		<input type="text" name="nom" id="nom" required/>

		<label for="date">Date : </label>
		<input type="date" name="date" id="date" value="<?php echo $date; ?>" required/>

		<label for="diff">Difficulter : </label>
		<select name="difficulte">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>

		<div>
			<input type="submit" value="Plannifier" />
		</div>
	</form>
</div>