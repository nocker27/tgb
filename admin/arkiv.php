<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Arkiv</title>
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
      <div id="tekstarkiv">
		  <h3>Årsregnskaber:</h3> <hr>
		  <a href="arkiv/Regnskab_1999_2000.pdf" target="_blank">Regnskab 1999 - 2000</a> <br>
  		  <a href="arkiv/Regnskab_2000_2001.pdf" target="_blank">Regnskab 2000 - 2001</a> <br>
  		  <a href="arkiv/Regnskab_2001_2002.pdf" target="_blank">Regnskab 2001 - 2002</a> <br>
  		  <a href="arkiv/Regnskab_2002_2003.pdf" target="_blank">Regnskab 2002 - 2003</a> <br>
  		  <a href="arkiv/Regnskab_2003_2004.pdf" target="_blank">Regnskab 2003 - 2004</a> <br>
  		  <a href="arkiv/Regnskab_2005_2006.pdf" target="_blank">Regnskab 2005 - 2006</a> <br><br>
		  <h3>Generalforsamling:</h3> <hr>
		  <a href="arkiv/TGB_generalforsamling_100300.pdf" target="_blank">Generalforsamling 10-03/00</a> <br>
		  <a href="arkiv/TGB_generalforsamling_110301.pdf" target="_blank">Generalforsamling 11-03/01</a> <br>
		  <a href="arkiv/TGB_generalforsamling_120303.pdf" target="_blank">Generalforsamling 12-03/03</a> <br>
		  <a href="arkiv/TGB_generalforsamling_050304.pdf" target="_blank">Generalforsamling 05-03/04</a> <br>
		  <a href="arkiv/TGB_generalforsamling_04-03-2005.pdf" target="_blank">Generalforsamling 04-03/05</a> <br>
		  <a href="arkiv/TGB_generalforsamling_100306.pdf" target="_blank">Generalforsamling 10-03/06</a> <br><br>
		  <h3>Gamle Nyheder:</h3> <hr>
		  <a href="arkiv/Gamle_nyheder_2000.pdf" target="_blank">Gamle Nyheder 2000</a> <br>
		  <a href="arkiv/Gamle_nyheder_2001.pdf" target="_blank">Gamle Nyheder 2001</a> <br>
		  <a href="arkiv/Gamle_nyheder_2002.pdf" target="_blank">Gamle Nyheder 2002</a> <br>
		  <a href="arkiv/Gamle_nyheder_2003.pdf" target="_blank">Gamle Nyheder 2003</a> <br>
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
	<script>
	var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
var visibleDivId = null;
function toggleVisibility(divId) {
  if(visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}
</script>
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
</script>	

</html>
