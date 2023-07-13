<?php
include("/var/www/html/src/Codility.php");

	$var = isset($_GET['num']) ? $_GET['num'] : 0;

	echo digits_sequence($var);
?>
