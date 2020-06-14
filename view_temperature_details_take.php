<?php include('includes/banner.php'); ?>
<!-- <?php //include('session.php'); ?> -->
<?php $get_id = $_GET['id']; ?>
<head>
	<style type="text/css">
		.sam{
			margin-left: 10em;
		}
		body{
			background-image: url(images/Cathedral.jpg)!important; 
			background-repeat: no-repeat!important;
			background-size: cover!important;
		}
	</style>
</head>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php
$sql="SELECT * FROM  members_registration WHERE uid='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $data=mysqli_fetch_array($result);

					?>	
                <div class="span9" id="">
                     <div class="row-fluid sam">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-right">

									<a href="member_dir_take_temp.php"><i class="icon-arrow-left icon-large"></i> Back</a>
								</div>
								<div class="muted pull-left">
                              LIST OF TEMPERATURE
									
								</div>
                            </div>

                            <div class="block-content collapse in">
                      <div class="span12">      	
           <table cellpadding="0" cellspacing="0" border="1" class="table" id="">
            <div class="alert alert-success text-center"><?php echo strtoupper($data['fname']).' '.strtoupper($data['mname']).' '.strtoupper($data['lname']) ;?> </div>
		<thead>
		<tr>
					<th>#ID</th>
					<th>DATE</th>
					<th>TIME</th>
					<th>TEMPERATURE</th>
					
		</tr>
		</thead>
												<?php
				$sql="SELECT * FROM  temperature_tbl WHERE uid='$get_id'";
                $result=mysqli_query($mysqli,$sql);
                $i = 0;
                 while($row=mysqli_fetch_array($result)){
                  $i++;
                $datepaid=date('Y-m-d', strtotime($row['date_taken']));
                $time=date('H:i A',strtotime($row['date_taken']));
                 
						?>
						
						
						<tr>
		               <td><?php echo $i; ?></td> 
		               <td><?php echo $datepaid ?></td>
		               <td><?php echo $time; ?></td>  
		               <td><?php echo $row['temperature']; ?></td> 
		               
		               </tr>
   
	               <?php } ?> 
		                </tbody>
	                     </table>
						</div>
                      
						<br><br><br><br>
						

                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include ('includes/footer.php'); ?>	
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>