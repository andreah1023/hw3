<div class="row">
  <div class="col">
<h1>Artists with albums</h1>
  </div>
  <div class="col-auto">
<?php
include "view-artists-with-albums-newform.php";
?>
  </div>
</div>


<div class="card-group">
<?php
while ($artist = $artists->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist['artist_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $albums = selectAlbumsByArtist($artist['artist_id']);
  while ($album = $albums->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $album['album_number']; ?> - <?php echo $album['release_year']; ?> - <?php echo $album['room']; ?></li>
<?php
  }
  ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Office: <?php echo $artist['room_number']; ?></small></p>
    </div>
  </div>

//new stuff
  
  
<?php
}
?>
</div>
