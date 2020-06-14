<?php 
session_start();
include 'includes/header.php';?>
<?php include ('includes/dbCon.php');?>
<?php $uid = $_SESSION['last_id']; ?>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="reg.css"> -->
  <style type="text/css">
  	fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
            background: #fff;
            margin-left: 15em!important;
}
input[type=radio]{
	cursor: pointer;
}
legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}
  </style>
</head>
<body>
  <?php include 'includes/navigation.php';?>
<div class="container">
  <!-- <h4>MEMBERS ENTRY</h4> -->
	<div class="row sam">
	<fieldset class="scheduler-border">
    <legend class="scheduler-border text-center"><h3 class="text-center">QUESTIONNAIRE</h3></legend>
<form class="signin" method="post" autocomplete="off" >
 
<div class="row-fluid">
  <ol>
    <div class="form-group ">

     <li><p>History of dry cough <input type="radio"   name="ab" value="Yes" > Yes
     &nbsp;&nbsp; <input type="radio"   name="ab" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group ">
      <li><p>Flu <input type="radio"   name="ba" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="ba" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group">
     <li> <p>Fever <input type="radio"   name="ca" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="ca" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group ">
      <li><p>Difficulty in breathing <input type="radio"   name="da" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="da" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group ">
     <li><p>Have you travelled outside Ghana? <input type="radio"   name="ea" value="Yes" checked=""> Yes
      &nbsp;&nbsp;<input type="radio"   name="ea" value="No" checked=""> No</p></li>
    </div>
   <div class="form-group">
      <li><p>Specify the country you have visited <input type="text" name="county_visited" /></p></li>
    </div>
    <div class="form-group ">
     <li><p>Have you travelled outside this town? <input type="radio"   name="gh" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="gh" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group">
      <li><p>Specify the region/town <input type="text" name="region" /></p></li>
    </div>
    <div class="form-group ">
     <li><p>You have been exposed to Covid-19 patient ? <input type="radio"   name="fa" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="fa" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group ">
     <li><p>Do any of your friend/relatives have <b>fever, dry cough, flu</b> ? <input type="radio"   name="df" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="df" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group ">
     <li><p>Are you working in a hospital? <input type="radio"   name="hos" value="Yes"> Yes
      &nbsp;&nbsp;<input type="radio"   name="hos" value="No" checked=""> No</p></li>
    </div>
    <div class="form-group">
      <li><p>State the hospital if you do <input type="text" name="kk" /></p></li>
    </div>

    </ol>
    <div class="form-group">
    <button type='submit' class="btn btn-primary " name="question"><i class="fa fa-arrow-up"> SUBMIT</i></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="member_dir.php" class="btn btn-danger">SKIP</a>
    </div>
  </div>
</form>
	
</fieldset>
	<?php include 'includes/footer.php';?>
</div>
</div>
<?php
if(isset($_POST['question'])){
	$histry_cough=$_POST['ab'];
	$flu=$_POST['ba'];
	$fever=$_POST['ca'];
	$difficulty_d=$_POST['da'];
	$travelled_outside=$_POST['ea'];
	$county_visited=$_POST['county_visited'];
	$travelled_outside_town=$_POST['gh'];
	$Specify_two_reg=$_POST['region'];
	$exposed_to_Covid_19_patient=$_POST['fa'];
	$friend_relatives= $_POST['df'];
	$working_in_a_hospital=$_POST['hos'];
	$State_the_hospital=$_POST['kk'];


	$sql=mysqli_query($mysqli,"INSERT INTO qustion_tbl(uid,history_dry_cough,fever,difficulty_breathing,travelled_outside_gh,country_visited,travelled_outside_town,specify_region,exposed_covid,friend_relative_fever,working_hospital,hospital_worked,flu) VALUES(
	'$uid',
	'$histry_cough',
	'$fever',
	'$difficulty_d',
	'$travelled_outside',
	'$county_visited',
     '$travelled_outside_town',
     '$Specify_two_reg',
      '$exposed_to_Covid_19_patient',
      '$friend_relatives',
      '$working_in_a_hospital',
       '$State_the_hospital',
        '$flu')");
	echo "<script>
	window.location = 'member_dir.php'
	</script>";
     
  //   }else{
  //   	echo '<div class="alert alert-warning" role="alert">
  // <h2 class="text-centet">UNABLE T SAVE RECORDS!</h2></div>';
  //   }

}
?>
</body>
