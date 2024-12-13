<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

// Fetch artists from the database
$artists = selectArtists();
?>

<div class="container mt-4">
  <h1>Artists</h1>

  <!-- Add Artist Button -->
  <div class="mb-3">
    <a href="add-artist.php" class="btn btn-success">Add Artist</a>
  </div>

  <!-- Artists Table -->
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Room</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($artist = $artists->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $artist['artist_id']; ?></td>
            <td><?php echo $artist['artist_name']; ?></td>
            <td><?php echo $artist['room_number']; ?></td>
            <td>
              <!-- Edit Button -->
              <a href="edit-artist.php?id=<?php echo $artist['artist_id']; ?>" class="btn btn-primary btn-sm">Edit</a>
              
              <!-- Delete Button -->
              <form method="post" action="delete-artist.php" class="d-inline">
                <input type="hidden" name="artist_id" value="<?php echo $artist['artist_id']; ?>">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');">Delete</button>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<?php
include "view-footer.php";
?>
