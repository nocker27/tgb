		<table id="customers">
				<h2 align="center">Alle opslag</h2>
				<tr>
					<th>Overskift</th>
					<th>Tekst</th>
					<th>Medlem</th>
					<th>Dato</th>
				</tr>
		<?php //fetching data in products where login_id fetches the seller in login table in database
			$result = mysqli_query($mysqli, "SELECT * FROM opslag INNER JOIN medlemmer ON opslag.medlemmer_id = medlemmer.id");
			while($res = mysqli_fetch_array($result)) { 
		?>
				<tr>
					<th><? echo $res['overskift']; ?></th>
					<th><? echo $res['tekst']; ?></th>
					<th><? echo $res['brugernavn']; ?></th>
					<th><? echo $res['dato']; ?></th>
				</tr>
			<?php	
			}	
			?>
		</table>