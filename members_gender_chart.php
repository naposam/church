<?php include('includes/dbCon.php'); ?>
<?php include('includes/banner.php'); ?>

<?php   
 $query = "SELECT gender, count(*) as number FROM members_registration GROUP BY gender";  
 $result = mysqli_query($mysqli, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>   
             
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
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br /> 
           <?php include('navbar.php'); ?>
           <div class="container"> 
           <div style="width:900px;">  
                <!-- <h3 align="center">Make Simple Pie Chart by Google Chart API with PHP Mysql</h3>  --> 
                <br />  

                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
         </div>
      </body>  
 </html> 