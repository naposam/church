<?php

		include('includes/dbCon.php');
		$uid = $_POST['id'];
		$temp = $_POST['r_address'];
mysqli_query($mysqli,"INSERT INTO temperature_tbl(uid,temperature) VALUES('$uid','$temp')")or die(mysqli_error($mysqli));
		
		
		?>	
		
		
		
		
		
		
		
		
		
		
		
		
	
		