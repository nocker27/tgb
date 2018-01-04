<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Om TGB</title>
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
		  <h3>Omkring klubben</h3>
      <p>Vi er en klub for spilleglade mennesker i alle aldre, dog henvender vi os primært til voksne. Klubben holder til i Værløse,  Nordsjælland og vi er p.t. ca. 20 medlemmer.</p>
	  <p>Vi er ikke en clan eller lignende, men spiller, hvad vi nu synes er sjovt. Primært spilles der shooters såsom Call of Duty 2, Half-life 2, BattleField 2 og andre. Derudover kører vi kørespil som bl.a. Toca 3</p>
	  <p>Vi mødes ca. 1 gang om måneden, primært på fredage fra ca. 19.00 til ca. 02.00</p>
	  <p>Vi ønsker med tiden at vokse, og er interesseret i at høre fra nye potientielle medlemmer.</p>
	</div>
	  
    </section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
	<div id="logo"><img src="../images/logo.svg" alt="tgblogo"><!-- Company Logo text --></div>
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
