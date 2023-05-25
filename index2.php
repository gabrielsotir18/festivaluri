<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>
<?php
include "db_connect.php";
?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
    <a href="bilete.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Bilete</a>
    <a href="Concerts.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Concerts</a>
    <a href="Program.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Program</a>
    <a href="LoginPage.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Login</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Our Top Festivals</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.untold.com/" target="_blank">Untold</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.tomorrowland.com/" target="_blank">Tomorrowland</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.rockinroma.com/" target="_blank">Rock in Roma</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.electriccastle.com/" target="_blank">Electric Castle</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="https://www.sagafestival.com/" target="_blank">Saga</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.exitfest.org/en" target="_blank">Exit Festival</a></h1>
      <p><br><br>
		 Festivalul a debutat în anul 2000 ca un festival al campusului universitar din Novi Sad, un festival care lupta pentru democrație și libertate în Serbia. După alegerile din 2000, EXIT s-a mutat în fortăreața Petrovaradin din Novi Sad, unde și-a continuat lupta.
		 <br>
		 Acum EXIT este un festival anual vizitat în medie de 75 de mii de persoane în fiecare seară, care aduce la fiecare ediție nume mari cerute de poporul sârb. De pildă, anul acesta EXIT i-a adus la Main Stage pe LP, MIGOS, Martin Garrix și David Guetta. Atmosfera la scena principală este mereu una incendiară, indiferent de artistul care performează pe scenă.
		 <br>
		 E loc pentru toate gusturile muzicale la EXIT Festival Novi Sad, fie că ești în căutare de Latino, Heavy Metal, Disco sau Reggae. 
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/exitfestival.jpg" width="500px"></p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.untold.com/" target="_blank">Untold</a></h1>
      <p><br><br>
		 Unul dintre cele mai așteptate festivaluri de muzica din lume, Untold iși deschide porțile tărâmului magic, în aceeași locație Cluj, România.. Pentru multe persoane, să ajungă la UNTOLD reprezintă unul dintre obiectivele principale ale verii.
		 <br>
		 Nu doar românii vor fi prezenți la acest festival extraordinar, ci și o mulțime de turiști străini, veniți în România special pentru se bucura de distracție la cel mai înalt nivel, așa cum a fost cazul la oricare din precedentele ediții UNTOLD. 
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/untold_index2.jpg" width="500px"></p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.tomorrowland.com/" target="_blank">Tomorrowland</a></h1>
      <p><br><br>
		 Tomorrowland este unul din cele mai mari festivaluri de muzică electronică din lume, organizat anual, în orașul Boom din Belgia. Tomorrowland are în prezent douăzeci și șase de parteneri oficial, printre care Pepsi, considerat partenerul oficial.
		 <br>
		 Cultura organizării de festivaluri însă şi-a atins apogeul cu ultracelebrul Tomorrowland, festival dedicat exclusiv muzicii electronice de dans, care a crescut de la un an la altul cu o viteză ameţitoare. Pe lângă line-up-ul impresionant, Tomorrowland aduce cu el şi un univers parallel .sustinut într-un peisaj de basm.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/tomorrowland.jpg" width="500px"></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-hover-black" href="index.php">1</a>
      <a class="w3-button w3-black" href="index2.php">2</a>
      <a class="w3-button w3-hover-black" href="index3.php">3</a>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l1">
      <p>Powered by Echipa 4</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
