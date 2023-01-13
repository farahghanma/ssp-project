
<!DOCTYPE html>
<html lang="en-US">
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Trip Options', 'Number of Subscribers'],
          
              <?php
              require_once 'connection.php';
              $conn = new mysqli($hn, $un, $pw, $db);
              if ($conn->connect_error) die($conn->connect_error);
              
              $query = "SELECT trip_option, count(1) FROM subscribers group by trip_option";
              $result = $conn->query($query);
              if(!$result) die($conn->error);
              
              $rows = $result->num_rows;
              
              for($j = 0; $j < $rows; ++$j){
                  $result->data_seek($j);
                  $row = $result->fetch_array(MYSQLI_NUM);
                  
                  echo "[";
                  echo "'$row[0]', $row[1]";
                  echo "],";
               }
              
              ?>
            ]);

  var options = {'title':'My Average Day', 'width':550, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</head>
<body>
<h1>My Web Page</h1>
<div id="piechart"></div>
</body>
</html>