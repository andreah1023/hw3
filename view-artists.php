<div class="container-fluid" style="background-color: #ff4d4d; padding: 20px; border-radius: 8px;">
  <h1 style="color: #ffffff; font-weight: bold; text-align: center;">Artists</h1>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead style="background-color: #ffcccc; color: #800000;">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Room</th>
          <th>Albums</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($artist = $artists->fetch_assoc()) { ?>
          <tr style="color: #ffffff;">
            <td><?php echo $artist['artist_id']; ?></td>
            <td><?php echo $artist['artist_name']; ?></td>
            <td><?php echo $artist['room_number']; ?></td>
            <td>
              <a href="albums-by-artist.php?id=<?php echo $artist['artist_id']; ?>" class="btn btn-light btn-sm">View Albums</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Artists', 'Songs listed to per Day'],
          ['SZA',     123],
          ['Daniel Ceaser',      43],
          ['Ariana Grande',  12],
          ['Lizzy McAlpine', 129],
        ]);

        var options = {
          title: 'Amount of Songs',
          pieSliceText: 'percentage',
          slices: {
            0: {offset: 0.1, color: '#FFB6C1'},  
            1: {offset: 0.1, color: '#FF69B4'},  
            2: {offset: 0.1, color: '#ADD8E6'},  
            3: {offset: 0.1, color: '#4682B4'}   
          },
          chartArea: {width: '80%', height: '80%'}, 
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 500px; height: 300px; margin: 0 auto;"></div>
  </body>
</html>
