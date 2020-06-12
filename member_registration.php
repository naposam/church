<?php include 'includes/header.php';?>
<?php include 'includes/validation.php';?>
<?php include ('includes/dbCon.php');?>
<?php
 if(isset($_POST['member'])){
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
     $tem=$_POST['temp'];
     $gender=$_POST['gender'];
   $check=mysqli_query($mysqli,"SELECT * FROM members_registration where phone_number='$phone' limit 1")or die(mysqli_error($mysqli));
   $count=mysqli_num_rows($check);

   if($count>0){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <h3 class="text-center">PHONE NUMBER ALREADY EXISTS</h3>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
   
   }
   else if(!empty($fname) && !empty($phone) && !empty($address)){
    mysqli_query($mysqli,"INSERT INTO members_registration(fname,mname,lname,gender,phone_number,address)VALUES('$fname','$mname','$lname','$gender','$phone','$address')");
    $last_id=$mysqli->insert_id;
     mysqli_query($mysqli,"INSERT INTO temperature_tbl(uid,temperature)VALUES('$last_id','$tem')");
       header('location: index.php');  
   }else{
     echo '<script type="text/javascript">
    swal("Ooooops!","unable to insert records!","error");
       </script>';
   }
   
 }
   ?>
<head>
  <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
  <?php include 'includes/navigation.php';?>
<div class="container">
  <h4>MEMBERS ENTRY</h4>
	<div class="row sam">
	
<form class="signin" method="post" autocomplete="off" >
 
<div class="col-md-12">
  
    <div class="form-group ">
      <input type="text" class="form-control" placeholder="First name" name="fname" onkeyup="letteronly(this)" >
    </div>
    <div class="form-group ">
      <input type="text" class="form-control" placeholder="Middle name" name="mname" onkeyup="letteronly(this)" >
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Last name" name="lname" onkeyup="letteronly(this)" required="">
    </div>
    <div class="form-group ">
      <input type="number" class="form-control" placeholder="phone" name="phone" required="">
    </div>
    <div class="form-group ">
      <input type="text" class="form-control" placeholder="Temperature" name="temp" required="" >
    </div>
   <div class="form-group">
      <input type="text" class="form-control" placeholder="Address" name="address" >
    </div>
   
    <div class="form-group">
    	<select class="form-control" name="gender" required="">
    		<option selected="" disabled="">--Select Gender--</option>
    		<option>Male</option>
    		<option>Female</option>
    	</select>
    </div>
    <button type='submit' class="btn btn-primary form-control" name="member"><i class="fa fa-arrow-up"> SUBMIT</i></button>
  </div>
</form>
	</div>
	<?php include 'includes/footer.php';?>
</div>