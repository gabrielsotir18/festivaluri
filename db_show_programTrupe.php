


<?php
include "db_connect.php";
If ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_error;
}

//echo $mysqli->host_info . "<br>";

$sql = "SELECT tblTrupe.idTrupa ,tblTrupe.numeTrupa ,tblTrupe.solistPrincipal, tblTrupe.genTrupa , tblFestivaluri.numeFestival, 
		tblAparitii.oraAparitie, tblEditiiFestivaluri.dataEditie,tblEditiiFestivaluri.locatieEditie
	FROM tblFestivaluri
		JOIN tblEditiiFestivaluri ON tblFestivaluri.idFestival=tblEditiiFestivaluri.festival
		JOIN tblAparitii ON tblEditiiFestivaluri.idEditie=tblAparitii.editie
		JOIN tblTrupe ON tblAparitii.trupa=tblTrupe.idTrupa
			WHERE tblEditiiFestivaluri.dataEditie >= '". date("Y/m/d") ."' ORDER by tblEditiiFestivaluri.dataEditie ASC";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	?>
	<p style="font-size:20px">
	<?php
    echo " Trupa: " . $row["numeTrupa"]. 
		" - Gen: " .  $row["genTrupa"] . " - Festival: " . $row["numeFestival"]." - Ora : " . $row["oraAparitie"]." - Data: " 
		. $row["dataEditie"]." - Locatie: " . $row["locatieEditie"]."<br><hr>";
  }
} else {
	echo "0 results";
}

?>