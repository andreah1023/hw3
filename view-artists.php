<h1>Artists</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Room</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $artist['artist_id']; ?></td>
    <td><?php echo $artist['artist_name']; ?></td>
    <td><?php echo $artist['room_number']; ?></td>
    <td><a href="albums-by-artist.php?id=<?php echo $artist['artist_id']; ?>">Albums</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
