<?php

		include('includes/dbCon.php');
		 $number=rand(1,101);
		 //$numbers = range(1, 100);
        //$number=shuffle($numbers);
		$uid = $_POST['id'];
		$temp = $_POST['r_address'];
mysqli_query($mysqli,"INSERT INTO temperature_tbl(uid,temperature,seat_number) VALUES('$uid','$temp','$number')")or die(mysqli_error($mysqli));
		
		
		?>	
		
		
		
		
		
	
		
		
		
		
		
		
	
		