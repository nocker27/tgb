<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit opslag</title>
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

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$overskift = $_POST['overskift'];
	$tekst = $_POST['tekst'];
	$dato = $_POST['dato'];
	
	// checking empty fields
	if(empty($overskift) || empty($tekst) || empty($dato)) {
				
		if(empty($overskift)) {
			echo "<font color='red'>Overskiften er tom.</font><br/>";
		}
		
		if(empty($tekst)) {
			echo "<font color='red'>Der er ikke nogen tekst.</font><br/>";
		}
		
		if(empty($dato)) {
			echo "<font color='red'>Dato'en er ikke sat.</font><br/>";
		}
		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE opslag SET overskift='$overskift', tekst='$tekst', dato='$dato' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is ret.php
		echo("<script>location.href = 'ret.php';</script>");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM opslag WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$overskift = $res['overskift'];
	$tekst = $res['tekst'];
	$dato = $res['dato'];
}
?>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0" align="center";>
			<h2 align="center">Updatere dit opslag</h2>
			<tr> 
				<td>Overskift</td>
				<td><input type="text" name="overskift" value="<?php echo $overskift;?>"></td>
			</tr>
			<tr> 
				<td>Tekst</td>
				<td><textarea rows="5" cols="51" name="tekst"><?php echo $tekst;?></textarea></td>
			</tr>
			<tr> 
				<td>Dato</td>
				<td><input type="text" name="dato" value="<?php echo $dato;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
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
