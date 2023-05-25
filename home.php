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

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Home</a>
    <a href="bilete.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Bilete</a>
    <a href="Concerts.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Concerts</a>
    <a href="Program.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Program</a>
    <a href="LoginPage.php" class="w3-bar-item w3-button w3-theme-l1">Login</a>
  </div>
</div>

<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<?php 
session_start();
include "db_connect.php";
// 
 ?>


     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
	 <h1>Please select an action.</h1>
	 <br><br><br>
	 <div style="display: flex; max-width: auto;">
		<div class="dropdown">
			<button class="dropbtn">Actiune festival</button>
				<div class="dropdown-content">
						<a href="afiseaza_festival.php">Afiseaza Festivalurile</a>
						<a href="adauga_festival_login.php">Adauga Festival</a>
						<a href="sterge_festival_login.php">Sterge Festival</a>
						<a href="modifica_festival_login.php">Modifica detalii despre festival</a>
				</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Actiune trupa</button>
				<div class="dropdown-content">
						<a href="afiseaza_trupa.php">Afiseaza Trupele</a>
						<a href="adauga_trupa_login.php">Adauga trupa</a>
						<a href="sterge_trupa_login.php">Sterge trupa</a>
						<a href="modifica_trupa_login.php">Modifica detalii despre trupa</a>
				</div>
		</div>
		<br><br><br>
		<div class="dropdown">
			<button class="dropbtn">Actiune editie festivaluri</button>
				<div class="dropdown-content">
						<a href="afiseaza_editii_login.php">Afiseaza editie</a>
						<a href="adauga_editie_login.php">Creeaza editie</a>
						
				</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Actiune aparitii trupe la festivaluri</button>
				<div class="dropdown-content">
						<a href="adauga_aparitie_login.php">Programeaza aparitie</a>
						
				</div>
		</div>
		<br><br><br>
	</div>
	<br><br><br>
	 <div>
	 <a href="chart.php">Statistica Tipuri Bilete</a>
	 <a href="bar.php">Statistica venit festivaluri</a>
	</div>
	 <br><br><br>
     <a href="Logout.php">Logout</a>


<?php 
// }else{
//      header("Location: index.php");
//      exit();
// }
 ?>


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
