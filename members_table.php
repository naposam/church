	<?php include('includes/dbCon.php'); ?>
	<form action="delete_stud.php" method="post">
	<table cellpadding="0" cellspacing="0" border="1" class="table" id="example">
		<div class="pull-right">
	 <a href="#" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a> 
	 <a href="daily_tem_check_chart.php" class="btn btn-inverse"><i class="icon-bar-chart icon-large"></i>View Chart</a>
	</div>
	<br><br>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
                    <th>#ID</th>
					<th>Full Name</th>
                    <th>Current Temperature</th>
                    <th>Phone</th>
                    
                    <th>Gender</th>
                    <th>Address</th>
                    <th></th>
                    <th></th>
                    <th></th>
					
					
		</tr>
		</thead>
		<tbody>
		<?php
       //  $date = date("Y-m-d");
		$query=mysqli_query($mysqli,"SELECT *, temperature_tbl.temperature, temperature_tbl.date_taken FROM members_registration LEFT JOIN temperature_tbl ON members_registration.uid = temperature_tbl.uid where Date(temperature_tbl.date_taken)>= CURRENT_DATE ") or die(mysqli_error($mysqli));

		//$query = mysqli_query($mysqli,"select * from crusaders ")or die(mysqli_error($mysqli));
		$i = 0;
		while($row = mysqli_fetch_array($query)){
		$id = $row['uid'];
		$i++;
		?>
		<tr>
		<td><?php echo $i; ?></td> 
		<td><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'];?></td> 
		
		<td><?php echo $row['temperature']; ?></td> 
		<td><?php echo $row['phone_number']; ?></td> 
		<td><?php echo $row['gender']; ?></td> 
		<td><?php echo $row['address']; ?></td> 
	
		
		<!--<td  width="20"><input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>"></td>-->
		<td >
		<a data-placement="left" title="Click to Edit" id="edit<?php echo $id; ?>" href="update_temperature.php<?php echo '?id='.$id; ?>" class="btn btn-success" style="background: #726464">UPDATE TEMPERATURE</a></td>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#edit<?php echo $id; ?>').tooltip('show');
				$('#edit<?php echo $id; ?>').tooltip('hide');
			});
			</script>
			<td>
		<a data-placement="top" title="Click to View all Details" id="view<?php echo $id; ?>" href="view_temperature_details.php<?php echo '?id='.$id; ?>" class="btn btn-warning" style="background: #565615">VIEW</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
		</td>
		<td>
					
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>