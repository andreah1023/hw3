<h1>Songs by albums</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Name</th>
      <th>Release Year</th>
      <th>Room</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($song = $songs->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $song['album_id']; ?></td>
    <td><?php echo $song['album_number']; ?></td>
    <td><?php echo $song['album_name']; ?></td>
    <td><?php echo $song['release_year']; ?></td>
    <td><?php echo $song['room']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
