<div class="container-fluid" style="background-color: #d4edda; padding: 20px; border-radius: 8px;">
  <div class="row mb-4">
    <div class="col">
      <h1 style="color: #155724; font-weight: bold;">Albums</h1>
    </div>
    <div class="col-auto">
      <?php include "view-albums-newform.php"; ?>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Number</th>
          <th>Name</th>
          <th>Actions</th>
          <th>Songs</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($album = $albums->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $album['album_id']; ?></td>
            <td><?php echo $album['album_number']; ?></td>
            <td><?php echo $album['album_name']; ?></td>
            <td>
              <?php include "view-albums-editform.php"; ?>
              <form method="post" action="" class="d-inline">
                <input type="hidden" name="alid" value="<?php echo $album['album_id']; ?>">
                <input type="hidden" name="actionType" value="Delete">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">
                  <i class="bi bi-trash"></i> Delete
                </button>
              </form>
            </td>
            <td>
              <form method="post" action="songs-by-album.php" class="d-inline">
                <input type="hidden" name="alid" value="<?php echo $album['album_id']; ?>">
                <button type="submit" class="btn btn-primary btn-sm">Songs</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
