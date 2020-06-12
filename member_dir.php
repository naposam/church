<?php include('includes/banner.php'); ?>
<style type="text/css">
    body{
      background-image: url(images/002.jpg) !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
      overflow-x: hidden;

    }

    .sam{
        margin-left:15em;
    }

     @media{
        body{
            background-image: url(images/002.jpg);
      
      background-size: cover ;
        }
    }

</style>
    <body >
	<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid ">
				
                <div class="span9" id="sam">
                     <div class="row-fluid sam">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query= mysqli_query($mysqli,"SELECT *, temperature_tbl.temperature,temperature_tbl.date_taken from members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid where Date(temperature_tbl.date_taken)>= CURRENT_DATE")or die(mysqli_error($mysqli));
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="color:green;"><i class="icon-reorder icon-large" ></i><strong>MEMBERS LIST </strong> </div>
                                <div class="muted pull-right" style="color:green"><strong>NUMBER OF MEMBERS:</strong> <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch"><center><img src="images/log.png" class="img-responsive"  style="margin:0;padding:0;height: 60px;width: 60px;"></center>
                            		<center>CHURCH NAME</center>
                            		
                    <center><p style="margin:0;padding:0;">(SLOGAN)</p></center> <br>
                    <p style="margin:0;padding:0;font-weight:bold; font-size: 20px;text-align: center;">LIST OF MEMBERS</p>
                    <small style="margin:0;padding:0; font-style: italic;">printed on: &nbsp;<?php echo date('d-m-Y')?></small>
                                </h2>
									<?php include('members_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <br><br> <br><br>
            <h2 id="noch">
            <?php 

        echo "<p> _________________________</p>"; 
        echo "<p> Signature </p>"; 


        ?>
        </h2>
		<?php include ('includes/footer.php'); ?>  
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>