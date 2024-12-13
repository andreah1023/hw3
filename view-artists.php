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
