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
