<h1>Albums by artist</h1>
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
while ($album = $albums->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $album['album_id']; ?></td>
    <td><?php echo $album['album_number']; ?></td>
    <td><?php echo $album['album_name']; ?></td>
    <td><?php echo $album['release_year']; ?></td>
    <td><?php echo $album['room']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
