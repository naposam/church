<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Members', 'Temperature'],
         <?php
         if(isset($_POST['chart'])){
          $data=$_POST['date'];
          if(!empty($data)){
             $sql= "SELECT *, temperature_tbl.temperature,temperature_tbl.date_taken from members_registration LEFT JOIN temperature_tbl on members_registration.uid=temperature_tbl.uid where Date(temperature_tbl.date_taken)= '$data' ";
         $fire = mysqli_query($mysqli,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['fname']."',".floatval($result['temperature'])."],";
          }
        }else{
          echo '<div class="alert alert-primary" role="alert">
            Date is Empty!</div>';
        }
         }
        

         ?>
        ]);

        var options = {
          title: 'Members and their Temperature on <?php echo date('Y-m-d');?>'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
