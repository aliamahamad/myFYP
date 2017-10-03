<?php

	$db = mysqli_connect("localhost", "root", "", "srs");

	//check connection
	if (mysqli_connect_errno()) {
		# code...
		echo "Connect failed: %s\n", mysqli_connect_error($db);
		exit();
	}
?>