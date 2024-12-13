<div class="container-fluid" style="background: url('https://via.placeholder.com') no-repeat center center; background-size: cover; padding: 40px; min-height: 100vh;">
  <h1 style="color: #ffffff; text-align: center; font-weight: bold; margin-bottom: 30px;">Artists with Albums</h1>
  <div class="card-group">
    <?php while ($artist = $artists->fetch_assoc()) { ?>
      <div class="card m-3" style="background: rgba(255, 255, 255, 0.8); border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <div class="card-body">
          <h5 class="card-title" style="color: #333333;"><?php echo $artist['artist_name']; ?></h5>
          <p class="card-text">
            <ul class="list-group">
              <?php
              $albums = selectAlbumsByArtist($artist['artist_id']);
              while ($album = $albums->fetch_assoc()) {
              ?>
                <li class="list-group-item"><?php echo $album['album_number']; ?> - <?php echo $album['release_year']; ?> - <?php echo $album['room']; ?></li>
              <?php } ?>
            </ul>
          </p>
          <p class="card-text"><small class="text-body-secondary">Office: <?php echo $artist['room_number']; ?></small></p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
