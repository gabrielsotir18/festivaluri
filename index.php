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
      <h1 class="w3-text-teal"><a href="https://www.colours.cz/?lang=en-us" target="_blank">Colors of Ostrava</a></h1>
      <p><br><br>
		 Colors of Ostrava este cel mai mare festival internațional de muzică din Republica Cehă și unul dintre cele mai importante evenimente muzicale din Europa Centrală. Festivalul se desfășoară în al treilea oraș ca mărime din Republica Cehă, Ostrava.
		 <br>
		 Acesta găzduiește printre altele: muzică internațională, dans, muzică etnică și o serie de nume cunoscute din scena muzicală cehă, inclusiv artiști și grupuri alternative. 
		 <br>
		 Festivalul are 12 scene, inclusiv 2 mari în aer liber (scena principală are un public de 35.000 de persoane) și în interior, apoi, o scenă de teatru, un spațiu de laborator, un spațiu pentru copii, un cinematograf și un spațiu pentru discuții live.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/colorsofostrava.jpg" width="500px"></p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://soundwavefestival.com/" target="_blank">Soundwave</a></h1>
      <p><br><br>
		 Soundwave este un festival de muzică anual care a apărut pentru prima dată în Perth, Australia de Vest în 2004. Apoi a continuat să organizeze festivaluri de muzică în alte orașe mari din Australia.
		 <br>
		 Festivalul găzduiește spectacole de muzică locală, precum și un număr considerabil de artiști internaționali din genul rock, punk și metal. Printre cei mai faimoși artiști prezenți de-a lungul anilor au fost Metallica, Linkin Park, Slipknot, Green Day, System of a Down, Blink 182, Smashing Pumpkins și Incubus.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/soundwave.jpg" width="500px"></p>
    </div>
  </div>
  
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://www.sagafestival.com/" target="_blank">Saga</a></h1>
      <p><br><br>
		 SAGA este o destinație pentru o experiență de festival incitantă care prezintă viziunea noastră despre imaginație și creativitate, în orașul București. Odată deschisă, își dezlănțuie energia, proiectând o lume imaginară incredibilă.
		 <br>
		 Începutul intrării în lumea SAGA este de neuitat. Folosim transformarea de la realitate la fantezie și ne ferim de basme. Nebunia este cuvântul cheie. Fără lucruri plictisitoare. Imagini atrăgătoare și colorate.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/saga.jpg" width="500px"></p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal"><a href="https://neversea.com/" target="_blank">Neversea</a></h1>
      <p><br><br>
		 Neversea Festival este cel mai mare festival de muzică care are loc pe o plajă din România. Acesta se desfășoară în fiecare an pe Neversea Beach din Constanța, în apropierea plajei Modern. Prima ediție a avut loc in anul 2017, iar festivalul atinge noi recorduri in fiecare an.
		 <br>
		 Neversea, poreclit şi "UNTOLD-ul de la mare" a adus laolaltă zeci de mii de fani și sute de artiști pe scene.  
		 <br>
		 La malul Mării Negre s-a aliniat un lineup solid de artişti, pop, rock şi EDM. Anul trecut, au urcat pe scenă trupe precum The Script, John Newman, Modestep, Alan Walker, Armin van Buuren sau Steve Aoki. În cele 4 zile de festival, s-au înregistrat peste 210.000 de spectatori.
	  </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src = "img/neversea.jpg" width="500px"></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="index.php">1</a>
      <a class="w3-button w3-hover-black" href="index2.php">2</a>
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
