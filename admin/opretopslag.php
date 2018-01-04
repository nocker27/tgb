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
		<form action="opretopslag1.php" method="post" name="form">
			<table width="25%" border="0" align="center">
				<h3 align="center">Nyt opslag</h3>
				<tr> 
					<td>Overskrift</td>
					<td><input type="text" placeholder="Indsæt overskrift" name="overskift"></td>
				</tr>
				<tr> 
					<td>Tekst</td>
					<td><textarea name="tekst" placeholder="Indsæt dit opslag" cols="21" rows="5"></textarea></td>
				</tr>
				<tr> 
					<td>Dato</td>
					<td><input type="text" placeholder="Dagsdato - DD/MM/YYYY" name="dato"></td>
				</tr>
				<tr> 
					<td><input type="hidden" name="medlemmer_id" value="4"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input type="submit" name="Submit" value="Tilføj opslag"></td>
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