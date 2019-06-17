<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("ASIA/TOKYO");

	$con = mysqli_connect("us-cdbr-iron-east-02.cleardb.net", "b965d64a76f1b0", "32bffce9", "heroku_ef7f5355a7e1ce2");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
