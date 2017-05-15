<h3>Résultats CCT :</h3>
<h4>voici la répartition de votre temps :</h4>
<p>
	<table id="type_1">
		<thead>
			<tr>
				<th>Matière</th>
				<th>Temps</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$total = 0;
			foreach ($timeToWork['matiere'] as $key => $value) 
			{
				$time = afficher_heure_minute($timeToWork['minute'][$key]);
				echo "<tr><td>" . $value . "</td><td>";
				if ($time['heure'] != 0) 
				{
				 	echo $time['heure'] . " h ";
				}
				echo $time['minute'] . " min";
				
				$total = $total + $timeToWork['minute'][$key];
			}
			$total = afficher_heure_minute($total);
			?>
			<tr>
				<td><strong>Total</strong></td>
				<td><strong>
				<?php 
				if ($total['heure'] != 0) 
				{
				 	echo $total['heure'] . " h ";
				}
				echo $total['minute'] . " min";
				?>
					
				</strong></td>
			</tr>
		</tbody>
	</table>
</p>
<p>
	<form action="index.php?pageId=cct&amp;add=1" method="post">
		<?php
		if ($_POST['heure'] == 0 AND $_POST['minute'] == 0)
		{
			echo '<input type="hidden" name="time" value="' . $_POST['timeToWork'] . '">';
		}
		else
		{
			$time_enter = $_POST['heure'] * 60;
			$time_enter += $_POST['minute'];
			echo '<input type="hidden" name="time" value="' . $time_enter . '">';
		}
		?>
		
		<div>
			<input type="submit" value="ajouter le temps de travail" />
		</div>
	</form>
</p>