<?php

$mysqli = mysqli_init();
mysqli_options($mysqli, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
mysqli_real_connect($mysqli, "ebusiness.mysql.database.azure.com", "gabosman", "festivalDB", "Capdecal-70", 3306, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT);

?>