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
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Home</a>
    <a href="bilete.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Bilete</a>
    <a href="Concerts.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Concerts</a>
    <a href="Program.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Program</a>
    <a href="LoginPage.php" class="w3-bar-item w3-button w3-theme-l1">Login</a>
  </div>
</div>

<head>
	<title>LOGIN</title>
      <!-- Include the Google Charts library -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    // Callback function to create and populate the chart.
    function drawChart() {
      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'numeFestival');
      data.addColumn('number', 'sumaBiletelor');

      // Fetch data from the database (assuming you have a MySQL connection)
      <?php
        // Replace the database credentials with your own
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "festivaldb";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Query the database to fetch the data
        $sql = "SELECT numeFestival, sumaBiletelor FROM (SELECT tblFestivaluri.numeFestival, sum(tblBilete.pretBilet) AS sumaBiletelor FROM tblFestivaluri
        JOIN tblEditiiFestivaluri ON tblFestivaluri.idFestival = tblEditiiFestivaluri.festival
        JOIN tblBilete ON tblEditiiFestivaluri.idEditie = tblBilete.editie
        GROUP BY tblFestivaluri.numeFestival) AS tabelSume ORDER BY sumaBiletelor DESC";
        $result = $conn->query($sql);

        // Populate the data table with the fetched data
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "data.addRow(['" . $row['numeFestival'] . "', " . $row['sumaBiletelor'] . "]);";
          }
        }

        // Close the connection
        $conn->close();
      ?>

      // Set chart options
      var options = {
        title: 'Statistica venit festivaluri',
        width: 450,
        height: 400,
        legend: { position: 'none' }
      };

      // Instantiate and draw the chart.
      var chart = new google.visualization.BarChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
  </script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>

<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
	 <form action="db_modifyFestivals.php"  method = "post">
	   <!-- Create a div to hold the chart -->
       <div id="piechart"></div>
    </form>
     <a href="Logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
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
