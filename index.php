<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forside nonmedlem</title>
<link href="BlogPostAssets/styles/blogPostStyle.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
	<?php include("connection.php"); ?>
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
	  <div id="tgb">
	  	<h1><!-- Blog title -->The Game Boys</h1>
	  </div>
    <?php include("login.php"); ?>
  </header>
  <div id="content">
	  <div id="mobilemenumain">
		  <nav>
		  	<?php include("mobilemenu.php"); ?>
		  </nav>
		  <hr>
	  </div>
    <section id="mainContent"> 
      <!--************************************************************************
    Main Blog content starts here
    ****************************************************************************-->
      <div id="tekst">
		  <h3>Lidt omkring os.</h3>
        <p>Du vil her på vores hjemmeside finde forskelligt info om hvem vi er.</p>
		<p>Vi er en computerklub som blev oprettet i 1998.</p>
		<p>Vi er en gruppe som mødes ca. en gang om måneden og spiller computer og bare hygger os.</p>
		<p>Vi har nogle arrangementer i løbet af året, som sommerfest og julefrokost.</p>
		<p>Er du ikke medlem, ja så er du velkommen til at kigge lidt rundt på den offentlige del af vores site.</p>
	  </div>
    </section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
	<div id="logo"><img src="images/logo.svg" alt="tgblogo" height="50%"><!-- Company Logo text --></div>
      <nav>
		<?php include("menu.php"); ?>
	  </nav>
    </section>
    <footer> 
      <!--************************************************************************
    Footer starts here
    ****************************************************************************-->
      <?php include("admin/footer.php"); ?>
    </footer>
  </div>
</div>
</body>
</html>
