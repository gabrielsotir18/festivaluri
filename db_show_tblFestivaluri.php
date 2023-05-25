
<?php
include "db_connect.php";
If ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
}

//echo $mysqli->host_info . "<br>";

$sql = "SELECT DISTINCT tblFestivaluri.idFestival ,tblFestivaluri.numeFestival,tblEditiiFestivaluri.dataEditie,tblEditiiFestivaluri.locatieEditie
	FROM tblFestivaluri
		INNER JOIN tblEditiiFestivaluri ON tblFestivaluri.idFestival=tblEditiiFestivaluri.festival
			WHERE tblEditiiFestivaluri.dataEditie >= '". date("Y/m/d") ."' ORDER by tblEditiiFestivaluri.dataEditie ASC";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	?>
	<p style="font-size:20px">
	<?php
    echo " Festival: " . $row["numeFestival"]. 
		" - Data: " .  $row["dataEditie"] . " - Locatie: " . $row["locatieEditie"]."<br><hr>";
  }
} else {
	echo "0 results";
}

?>