<h3>Antal tilmeldte</h3> <hr>
	<?php //fetching data in products where login_id fetches the seller in login table in database
		$result = mysqli_query($mysqli, "SELECT * FROM tilmelde ORDER BY id DESC LIMIT 1");
		while($res = mysqli_fetch_array($result)) { 
	?>
		<p>Der er meldt "<? echo $res['id']; ?>" medlemmer til næste spilledag</p>
	<?php	
	}	
	?>