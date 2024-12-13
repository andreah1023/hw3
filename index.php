<?php
$pageTitle = "Home";
include "view-header.php";
?>

<!-- Page Content -->
<div style="background-color: blue; color: white; font-weight: bold; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <h1>Welcome to my Final Project!</h1>
</div>

<!-- Google Chart Container -->
<div id="chart_div" style="width: 900px; height: 500px; margin: 30px auto;"></div>

<!-- Load Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  // Load the Visualization API and the corechart package.
  google.charts.load('current', {
    packages: ['corechart', 'bar']
  });

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Create the data table.
    var data = google.visualization.arrayToDataTable([
      ['Artist', 'Albums'],  // Column names
      ['Artist 1', 10],      // Example data
      ['Artist 2', 15],
      ['Artist 3', 7],
      ['Artist 4', 20],
      ['Artist 5', 5]
    ]);

    // Set chart options
    var options = {
      title: 'Number of Albums by Artist',
      chartArea: { width: '50%' },
      hAxis: {
        title: 'Number of Albums',
        minValue: 0
      },
      vAxis: {
        title: 'Artist'
      }
    };

    // Instantiate and draw the chart.
    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

<?php
include "view-footer.php";
?>
