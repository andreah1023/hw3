<select class="form-select" id="" name= "">
 <?php
while ($hospitalItem = $hospitalList->fetch_assoc()) {
  ?>
    <option value ="<?php echo $albumItem['album_id'];?>"><?php echo $albumItem['album_name'];?></option>

  <?php
}
?>
</select> 
