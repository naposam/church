<?php include 'includes/header.php';?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
 h1{ 
  width: 100%;
  margin:0;
  padding: 0;
  position: absolute;
  /*top:50%;*/
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial;
  font-size: 20em;
  text-align: center;
  text-shadow: -2px 2px 0 #666,
                 -4px 4px 0 #666,
                 -6px 6px 0 #666,
                 -8px 8px 0 #666,
                 -10px 10px 0 #666,
                 -12px 12px 0 #666,
                 -14px 14px 0 #666,
                 -16px 16px 0 #666,
                 -18px 18px 0 #666,
                 -20px 20px 0 #666;
    }             
</style>
</head>
<body>
<div class="container-fluid">
<div class="jumbotron">
  <h1 class="display-4 text-center">CHURCH ATTENDANCE SYSTEM</h1>
  <hr class="my-4">
  <div class="row">
  	<div class="col-lg-3">
  <a class="btn btn-primary btn-lg" href="member_registration.php" role="button">MEMBER DATA ENTRY</a>
  		
  	</div>
<div class="col-lg-3">
  <a class="btn btn-primary btn-lg" href="member_dir.php" role="button">MEMBER DIRECTORY</a>
  		
  	</div>
  	<div class="col-lg-3">
  <a class="btn btn-primary btn-lg" href="view_export_temperature_inc.php" role="button">VIEW MEMBER TEMPERATURE</a>
  		
  	</div>
  		<div class="col-lg-3">
  <a class="btn btn-primary btn-lg" href="member_dir_take_temp.php" role="button">TAKE TEMPERATURE</a>
  		
  	</div>
</div>
</div>
</div>
<?php include 'includes/footer.php' ?>
</body>
</html>