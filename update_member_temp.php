<?php

		include('includes/dbCon.php');
		$uid = $_POST['id'];
		$temp = $_POST['r_address'];
mysqli_query($mysqli,"UPDATE temperature_tbl set temperature = '$temp' where uid ='$uid'")or die(mysqli_error($mysqli));
		
		
		?>	
		
		
		
		
		
		
		
		
		
		
		
		
	
		