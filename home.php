<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <style>
    html,body,h1,h2,h3,h4,h5,h6 { font-family: "Roboto", sans-serif; }
    .w3-sidebar {
      z-index: 3;
      width: 250px;
      top: 43px;
      bottom: 0;
      height: inherit;
    }
    .content {
      margin-left: 250px;
      padding: 20px;
    }
  </style>
</head>
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

  <?php
  session_start();
  include "db_connect.php";

//   if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  ?>
  <div class="content">
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <h1>Please select an action.</h1>
    <br><br>
    <div class="w3-row-padding">
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <h2>Actiune festival</h2>
          <a href="afiseaza_festival.php">Afiseaza Festivalurile</a>
          <a href="adauga_festival_login.php">Adauga Festival</a>
          <a href="sterge_festival_login.php">Sterge Festival</a>
          <a href="modifica_festival_login.php">Modifica detalii despre festival</a>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <h2>Actiune trupa</h2>
          <a href="afiseaza_trupa.php">Afiseaza Trupele</a>
          <a href="adauga_trupa_login.php">Adauga trupa</a>
          <a href="sterge_trupa_login.php">Sterge trupa</a>
          <a href="modifica_trupa_login.php">Modifica detalii despre trupa</a>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <h2>Actiune editie festivaluri</h2>
          <a href="afiseaza_editii_login.php">Afiseaza editie</a>
          <a href="adauga_editie_login.php">Creeaza editie</a>
        </div>
      </div>
    </div>
    <br><br>
    <div class="w3-row-padding">
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <h2>Actiune aparitii trupe la festivaluri</h2>
          <a href="adauga_aparitie_login.php">Programeaza aparitie</a>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <h2>Statistici</h2>
          <a href="chart.php">Statistica Tipuri Bilete</a>
          <a href="bar.php">Statistica venit festivaluri</a>
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-card w3-padding">
          <a href="Logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <?php
//   } else {
//     header("Location: index.php");
//     exit();
//   }
  ?>

  <!-- Scripts -->
  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Toggle between showing and hiding the sidebar
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
  </script>
</body>
</html>
