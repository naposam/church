<?php include('includes/banner.php'); ?>

<?php $get_id = $_GET['id']; ?>
<style type="text/css">
    body{
      background-image: url(images/use.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;

    }
    .sam{
        margin-left:26.5em;
    }
    #block_bg{
    	width: 70%;
    	padding: 0!important;
    	background: #b3b3b3!important;
    	color:#fff!important;
    }
    
</style>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				
                <div class="span9" id="">
                     <div class="row-fluid sam">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-pencil icon-large"></i>Update Temperature</div>
                                <div class="muted pull-right"><a href="member_dir.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
						<?php
						$query = mysqli_query($mysqli,"SELECT *,temperature_tbl.temperature from members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid where temperature_tbl.uid = '$get_id'")or die(mysqli_error($mysqli));
						$row = mysqli_fetch_array($query);
						?>
						<form id="update_student" class="form-signin" method="post">
						<!-- span 4 -->
										<div class="span4" style="margin-left: 10em;">
										<input type="hidden" value="<?php echo $row['uid']; ?>" class="input-block-level"  name="id" required>
										<label>PHONE NUMBER:</label>
											<input type="text" class="form-control"  name="crusader_id" value="<?php echo $row['phone_number']; ?>" readonly>
										   <label>FIRST NAME:</label>
											<input type="text" class="form-control"  name="fname" value="<?php echo $row['fname']; ?>" required readonly>
											<label>MIDDLE NAME:</label>
											<input type="text" class="form-control"  name="mname"     value="<?php echo $row['mname']; ?>" readonly >
											<label>LAST NAME:</label>
											<input type="text" class="form-control"  name="lname"  value="<?php echo $row['lname']; ?>"  required readonly>
							
										</div>		
						<div class="span4" >
							
							<label>Enter Temperature</label>
									<input type="text" name="r_address" class="form-control" value="<?php echo $row['temperature']; ?>" required>
									<br><br>	
							<button class="btn btn-dark " name="update"><i class="icon-save icon-large"></i>update</button>
						</div>
						
						<!--end span 4 -->
						<div class="span12"><hr></div>		
							</form>			
								<script>
									jQuery(document).ready(function($){
										$("#update_student").submit(function(e){
											e.preventDefault();
											var _this = $(e.target);
											var formData = $(this).serialize();
											$.ajax({
												type: "POST",
												url: "update_member_temp.php",
												data: formData,
												success: function(html){
													$.jGrowl("Member Successfully  Updated", { header: 'Crusader Updated' });
													window.location = 'member_dir.php';
												}
											});
										});
									});
								</script>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include 'includes/footer.php';?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>