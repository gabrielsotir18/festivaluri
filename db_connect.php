<?php

$con = mysqli_init();
mysqli_options($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
mysqli_real_connect($conn, "ebusiness.mysql.database.azure.com", "gabosman", "Capdecal-70", "Capdecal-70", 3306, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT);

?>