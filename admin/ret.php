<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profil</title>
<link href="../BlogPostAssets/styles/blogPostStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
	<?php include("../connection.php"); ?>
<div id="mainwrapper">
  <header>
	  <div id="tilmeldte">
	  	<?php include("antal.php"); ?>
	  </div>
	  <div id="tgb">
	  	<h1><!-- Blog title -->The Game Boys</h1>
	  </div>
	  <div id="tilmeld">
	  	<?php include("tilmeld.php"); ?>
	  </div>
  </header>
  <div id="content">
	  <div id="mobilemenu">
		  <nav>
		  	<?php include("mobileadminmenu.php"); ?>
		  </nav>
		  <hr>
	  </div>
    <section id="mainContent"> 
      <!--************************************************************************
    Main Blog content starts here
    ****************************************************************************-->
      <div id="tekst">
        

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM medlemmer WHERE id=".$_SESSION['id']." ORDER BY id ASC");
?>

<body>
	<h3>Updatere din profil</h3>
	<form id="profil">
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Navn</td>
			<td>Email</td>
			<td>Brugernavn</td>
			<td>Password</td>
			<td>Updatere</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['brugernavn']."</td>";
			echo "<td>".$res['password']."</td>";
			echo "<td><a href=\"editmed.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
	</table>
	</form>
<?php

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM opslag WHERE medlemmer_id=".$_SESSION['id']." ORDER BY id ASC");
?>


<body>
	<h3>Her er alle dine opslag gennem tiden</h3>
	<form id="opslag">
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Overskift</td>
			<td>Opslag</td>
			<td>Dato</td>
			<td>Update</td>
		</tr>
		<?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['overskift']."</td>";
			echo "<td>".$res['tekst']."</td>";
			echo "<td>".$res['dato']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>  <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
	</table>
	</form>
	</div>
    </section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
	<div id="logo"><img src="../images/logo.svg" alt="tgblogo" height="50%"><!-- Company Logo text --></div>
      <nav>
		<?php include("adminmenu.php"); ?>
	  </nav>
    </section>
    <footer> 
      <!--************************************************************************
    Footer starts here
    ****************************************************************************-->
      <?php include("footer.php"); ?>
    </footer>
  </div>
</div>
</body>
</html>
