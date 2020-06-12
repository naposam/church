
<html>
 <head>
  <title>CHURCH ATTENDANCE SYSTEM</title>
  <link rel="icon" href="images/log.png" type="image/jpeg">
  <script src="dataTables/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
  <script type="text/javascript" src="dataTables/datatables.min.js"></script>
  <link rel="stylesheet" href="dataTables/bootstrap.min.css" />
  <script src="dataTables/bootstrap.min.js"></script>
  <style type="text/css">
    body{
    background:#b3b3b3;
    background-size: cover;
    
    
    }
    .table tr:nth-child(odd){ 
    background: #b8d1f3!important;
  }
.table tr{
    background: #b8d1f3;
  }
  .table tr:nth-child(even){
    background: #dae5f4;
  }

  </style>
 </head>
 <body>
  <nav class="navbar navbar-default" style="background:#726463!important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:#fff;">
      <i class="fa fa-home"> Back </i>
      </a>
    </div>
  </div>
</nav>
  <div class="container box">
  <h1 align="center" >MEMBERS TEMPERATURE RECORDS</h1>
   <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>FullName</th>
       <th>Temperature</th>
       <th>Gender</th>
       <th>Address</th>
       <th>Phone Number</th>
       <th>Date Taken</th>
        <th>Time Taken</th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
  <br />
  <br />
 </body>
</html>
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#customer_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"fetch.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'copy'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
  
 });
 
</script>