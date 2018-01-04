<!-- <form action='' method='POST'> -->
<?php
// mysqli_query($mysqli, "INSERT INTO tilmelde (id, tilmeldt) 
//	SELECT $id, '$brugernavn' 
//	FROM medlemmer 
//	WHERE id = '$id'
//	AND brugernavn = '$brugernavn'")
	
	
// mysqli_query($mysqli, "INSERT INTO `tilmelde`(`id`, `tilmeldt`)")

// mysqli_query($mysqli, "SELECT id FROM medlemmer AND INSERT INTO tilmelde WHERE $id = 'id'")

//	mysqli_query($mysqli, "INSERT INTO tilmelde ('id',tilmeldt) SELECT id, brugernavn FROM medlemmer") 
?>

<?php

		if(isset($_POST['submit'])) {
			$tilmeldt = $_POST['tilmeldt'];
			$guest = $_POST['guest'];			

			if($tilmeldt == "") {
				echo "The field should be filled.";
				echo "<br/>";
				
			} else {
				$result = mysqli_query($mysqli, "INSERT INTO tilmelde (tilmeldt, guest) VALUES('$tilmeldt', '$guest')") 
					or die("Could not execute the insert query.");

				echo "Registration successfully";
				echo "<br/>";
		
			}
		} else {
		?>
	<form name="form1" method="post" action="">
		<table width="75%" border="0">
			<tr> 
				<td>&nbsp;</td>
				<td width="10%">Tilmelding til næste spilleaften</td>
			</tr>
			<tr> 
				<td width="10%">Brugernavn</td>
				<td><input type="text" name="tilmeldt"></td>
			</tr>
			<tr>
				<td>Tager du en gæst med?</td>
				<td><input type="radio" name="guest" value="ja">Ja</td>
			</tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
<?php
}
?>
