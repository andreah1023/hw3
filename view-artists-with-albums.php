<h1>Artists with albums</h1>
<div class="card-group">
<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
<?php
  $albums = selectAlbumsByArtist($artist['artist_id']);
  while ($album = $albums->fetch_assoc()) {
?>
<?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $artist['room_number']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
