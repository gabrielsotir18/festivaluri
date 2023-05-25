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
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<?php
include "db_connect.php";


//echo $mysqli->host_info . "<br>";

$sql = "SELECT * FROM tblEditiiFestivaluri JOIN tblFestivaluri ON tblEditiiFestivaluri.festival = tblFestivaluri.idFestival;";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	?>
	<p style="font-size:20px">
	<?php
    echo " Festival: " . $row["numeFestival"]. 
		" Data editiei festivalului: " .  $row["dataEditie"] . " - Locatia editiei festivalului: " . $row["locatieEditie"]."<br>";
  }
} else {
	echo "0 results";
}

?>