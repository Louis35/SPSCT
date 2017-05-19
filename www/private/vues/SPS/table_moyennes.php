<div id="table_moyennes">
	<table id="type_1">
		<thead>
			<tr>
				<th>Matière</th>
				<th>Moyenne</th>
				<th>Notes</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($tableau_matieres as $key => $matiere) 
			{
				$moyenne_matiere_ = round($tableau_moyennes[$key], 2);
				$last_grade = recup_last_grade($trimestre, $tableau_matieres_Id[$key], $_SESSION['Id']);

				echo '<tr><td>' . $matiere . '</td><td>' . $moyenne_matiere_ . '</td><td>';
				foreach ($last_grade as $grade) 
				{
					echo '  ' . $grade['Note'] . '<sub class="coeff">' . $grade['coeff'] . '</sub>';
				}
				echo "</td></tr>";
			}
			$moyenne = round($moyenne, 2);
		?>
		<tr>
			<td><strong>Général</strong></td>
			<td><strong><?php echo $moyenne;?></strong></td>
		</tr>
		</tbody>
	</table>
</div>