<?php
  $con = mysqli_connect("localhost","root","chaithanya","login_db");
  if($con){
    echo "Doctor's Graph";
  }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['dat', 'count(name)'],
         <?php
         $sql = "SELECT date(dat),count(name) FROM patient group by date(dat);";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['date(dat)']."',".$result['count(name)']."],";
          }

         ?>
        ]);

        var options = {
          title: 'Patients Analysis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>