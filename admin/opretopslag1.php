<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Opretopslag</title>
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
      <div id="tekst_forside"> 
		
		  
	<?php

	if(isset($_POST['Submit'])) {	
	$overskift = $_POST['overskift'];
	$tekst = $_POST['tekst'];
	$dato = $_POST['dato'];
		
	// checking empty fields
	if(empty($overskift) || empty($tekst) || empty($dato)) {
				
		if(empty($overskift)) {
			echo "<font color='red'>Der er ikke nogen overskrift.</font><br/>";
		}
		
		if(empty($tekst)) {
			echo "<font color='red'>Der er ikke nogen tekst.</font><br/>";
		}
		
		if(empty($dato)) {
			echo "<font color='red'>Der er ikke nogen dato.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli,"INSERT INTO opslag (`id`, `overskift`, `tekst`, `dato`, `medlemmer_id`) VALUES (NULL, '$overskift', '$tekst', '$dato', '4')");
		
		//display success message
		echo "<font color='green'>Opslaget er blevet tilføjet.";
		echo "<br/><a href='opslag.php'>Vis alle opslagene</a>";
		
	}
}
?>
		  
	
		  
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