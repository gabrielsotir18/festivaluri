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
      <h1 class="w3-text-teal"><a href="https://www.rockinroma.com/" target="_blank">Rock in Roma</a></h1>
      <p><br><br>
		 Festivalul Rock in Roma este un eveniment musical care are loc anual în Roma. Nu are loc ca un festival clasic (adică nu se desfășoară pe una sau mai multe zile consecutive în care evoluează mai multe grupuri), ci ca un eveniment muzical în care, pe o perioadă de aproximativ o lună, evoluează mai multe grupuri.
		 <br>
		 Caracteristica festivalului este calitatea și varietatea line-up-ului, permițând astfel întâlnirea diferitelor culturi și genuri muzicale. 
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/rockinroma.jpg" width="500px"></p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.sziget.com/" target="_blank">Sziget</a></h1>
      <p><br><br>
		 Festivalul Sziget este un festival muzical și cultural, ce se desfășoară anual. Început ca un festival studențesc, în 1993, a evoluat de la an la an si a devenit ceea ce este astăzi: unul dintre cele mai mari festivaluri din Europa.
		 <br>
		 Pe insulă sunt prezente nenumărate scene, dedicate diverselor stiluri muzicale și activităților culturale. Pe lângă muzică, se desfășoară și multe alte evenimente culturale sau sportive: cinema, teatru și dans, bungee jumping, faimosul luminarium, etc. 
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/sziget.png" width="500px"></p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.electriccastle.com/" target="_blank">Electric Castle</a></h1>
      <p><br><br>
		 Electric Castle este un festival de muzică din România, care se desfășoară în fiecare an la Castelul Banffy, din comuna Bonțida, județul Cluj. Festivalul îmbină în lineup zone muzicale variate cum ar fi rock, reggae, hip hop, trap, muzică electronică sau indie cu tehnologia, cu arta alternativă, arta stradală și cultura. 
		 <br>
		 Electric Castle se diferentiaza de celelalte festivaluri din Romania prin concertele sale care se desfasoara pe scenele din interiorul si din exteriorul unui castel. Scopul noului concept lansat de Electric Castle este sa ofere tinerilor o experienta diferita prin interactiunea lor cu muzica electronica.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/electriccastle.png" width="500px"></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-hover-black" href="index.php">1</a>
      <a class="w3-button w3-hover-black" href="index2.php">2</a>
      <a class="w3-button w3-black" href="index3.php">3</a>
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
