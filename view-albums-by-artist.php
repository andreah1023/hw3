<?php
$pageTitle = "Albums by Artist";
include "view-header.php";
?>

<h1>Albums by Artist</h1>
<div class="table-responsive">
  <table class="table" style="width: 100%; border-collapse: collapse; margin: 20px 0;">
    <thead>
      <tr style="background-color: #f2f2f2; text-align: left;">
        <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Number</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Name</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Release Year</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Room</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Ensure the variable $albums is defined and contains the result set
      while ($album = $albums->fetch_assoc()) {
      ?>
        <tr>
          <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $album['album_id']; ?></td>
          <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $album['album_number']; ?></td>
          <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $album['album_name']; ?></td>
          <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $album['release_year']; ?></td>
          <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $album['room']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<?php
include "view-footer.php";
?>
