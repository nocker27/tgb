<html>
<head>
	<title>Login</title>
	<link href="../../styles/eCommerceStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="myDIV">
<?php

if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['brugernavn']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either brugernavn or password field is empty.";
		echo "<br/>";
		echo "<a href='index.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM medlemmer WHERE brugernavn='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			$validuser = $row['brugernavn'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid brugernavn or password.";
			echo "<br/>";
			echo "<a href='index.php'>Go back</a>";
		}
if(isset($_SESSION['valid'])){
echo("<script>location.href = 'admin/index.php';</script>");			
}
	}
} else {
?>
	<p><font size="+2"></font></p>
	<form name="form1" method="post" action="">
		<table width="98%" border="0">
			<tr> 
				<td width="10%">Brugernavn</td>
				<td><input type="text" name="brugernavn"></td>
			<tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password"></td>
			<tr>
			<tr> 
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Login"></td>
			<tr>
			</tr>
				
			</tr>
		</table>
	</form>
<?php
}
?>
</div>
</body>
</html>
