<select class="form-select" id="alid" name= "aName">
 <?php
while ($albumItem = $albumList->fetch_assoc()) {
  ?>
    <option value ="<?php echo $albumItem['album_id'];?>"><?php echo $albumItem['album_name'];?></option>

  <?php
}
?>
</select> 