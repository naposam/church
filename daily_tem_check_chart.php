<?php include('includes/dbCon.php'); ?>
<?php include('includes/banner.php'); ?>

<html>
  <head>
    
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Members', 'Temperature'],
         <?php
         $date=$_POST["date"];
         $sql = "SELECT *, temperature_tbl.temperature,temperature_tbl.date_taken from members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid where Date(temperature_tbl.date_taken)>= CURRENT_DATE ";
         $fire = mysqli_query($mysqli,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['fname']."',".floatval($result['temperature'])."],";
          }

         ?>
        ]);

        var options = {
          title: 'Members and their Temperature'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <style type="text/css">
      div{
        margin:0;
        padding: 0;
      }
      body{
        background:#b3b3b3!important;
      }
    </style>
  </head>
  <body>
<?php include('navbar.php'); ?>
<div class="container">
  <div class="row-fluid">
    <form method="post" action="">
      <div class="col-md-8">
     <label>Filter By: &nbsp;&nbsp;<input type="date" name="date" class="form-control"/>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-primary btn-lg" type="submit" name="chart">Load Chart</button></label>
      </div>
    </form>
  </div>
  </div>
  <div class="container">
    

         <div class="col-lg-12">   
               <div id="piechart" style="width: 900px; height: 500px;"></div>
                <div id="piegender" style="width: 900px; height: 500px;"></div>  
           </div>  
         </div>
  </div>
  <?php   
 $query = "SELECT members_registration.gender,count(*) as number, temperature_tbl.date_taken from members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid where Date(temperature_tbl.date_taken)= '".$_POST["date"]."' GROUP BY members_registration.gender";  
 $result = mysqli_query($mysqli, $query);  


 ?> 
             <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'PERCENTAGE OF MALE AND FEMALE',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piegender'));  
                chart.draw(data, options);  
           }  
           </script>
  </body>
</html>


<?php include('load_chart.php'); ?>