<article>
    <h3>Kontaktinformation:</h3>
	<p>Vores adresse:</p>
	<p>Pædagogisk Central</p>
	<p>Jonstrupvangvej 150 Opg. C</p>
	<p>3500 Værløse</p>
</article>
<article>
    <h3>Kontakt person</h3>
    <p>Formand: Ace.</p>
</article>
<article id="medlemliste">
    <h3>Medlemmer</h3>
	<table id="medlemmer">
		<tr>
			<td><p>Navn</p></td>
			<td><p>Tagnavn</p></td>
		</tr>
    <?php $result = mysqli_query($mysqli, "SELECT * FROM medlemmer");
			while($res = mysqli_fetch_array($result)) { 
	?>
		<tr>
			<td><? echo $res['name']; ?></td>
			<td><? echo $res['brugernavn']; ?></td>
		</tr>
	
	<?php	
		}	
	?>
		</table>
</article>