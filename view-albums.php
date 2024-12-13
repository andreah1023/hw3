<div class="row">
  <div class="col">
<h1>Albums</h1>
  </div>
  <div class="col-auto">
<?php
include "view-albums-newform.php";
?>
  </div>
</div> 
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Name</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['album_number']; ?></td>
    <td><?php echo $album['album_name']; ?></td>
    <td>
<?php
include "view-albums-editform.php";
?>
    </td>
    <td>
      <form method="post" action="">
      <input type="hidden" name="alid" value="<?php echo $album['album_id']; ?>">
      <input type="hidden" name="actionType" value="Delete">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
      </svg>
      </button>
      </form>
    </td>
    <td>
      <form method="post" action="songs-by-album.php">
        <input type="hidden" name="alid" value="<?php echo $album['album_id']; ?>">
        <button type="submit" class="btn btn-primary">Songs</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

<!-- Google Pie Chart -->
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Albums', 'Hits', { role: 'style' }],
          ['ALB 3', 1, 'color: gray'],
          ['ALB 2', 3, 'color: #76A7FA'],
          ['1', 4, 'opacity: 0.2'],
        ]);

        var options = {
          title: 'Albums by Hits',
          is3D: true,
          chartArea: {width: '70%', height: '70%'},
          slices: {
            0: {offset: 0.1},
            1: {offset: 0.1},
            2: {offset: 0.1},
            3: {offset: 0.1},
            4: {offset: 0.1}
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 400px; height: 300px; margin: 0 auto;"></div>
  </body>
</html>
