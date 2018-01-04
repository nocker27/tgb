<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forside</title>
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
		  <h3>Lidt omkring os.</h3>
        <p>Du vil her på vores hjemmeside finde forskelligt info om hvem vi er.</p>
		<p>Vi er en computerklub som blev oprettet i 1998.</p>
		<p>Vi er en gruppe som mødes ca. en gang om måneden og spiller computer og bare hygger os.</p>
		<p>Vi har nogle arrangementer i løbet af året, som sommerfest og julefrokost.</p>
		<p>Er du ikke medlem, ja så er du velkommen til at kigge lidt rundt på den offentlige del af vores site.</p>
	  </div>
		<div id="bannerImage">
			<?php include("slideshowmenu.php"); ?>
			<div id="Menu1">
				<!------------------------- Bestyrelsesmøde februar 2004 ------------------------->	
				<div class="slideshow-container">

				<div class="mySlides fade">
				  <div class="numbertext">1 / 3</div>
				  <img src="img/bestyrelsesmøde februar 2004/bestyr030204-001.jpg" style="width:100%">
				  <div class="text">Bestyrelsesmøde februar 2004</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 3</div>
				  <img src="img/bestyrelsesmøde februar 2004/bestyr030204-002.jpg" style="width:100%">
				  <div class="text">Bestyrelsesmøde februar 2004</div>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 3</div>
				  <img src="img/bestyrelsesmøde februar 2004/bestyr030204-003.jpg" style="width:100%">
				  <div class="text">Bestyrelsesmøde februar 2004</div>
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				</div>
			
			</div>
			
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
