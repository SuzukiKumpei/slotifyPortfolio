<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("ASIA/TOKYO");

	$con = mysqli_connect("localhost", "root", "cO7HZoMBuy9dYQoT", "slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>