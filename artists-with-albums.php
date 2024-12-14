<?php
require_once("util-db.php");
require_once("model-artists-with-albums.php");

$pageTitle = "Artists with Albums";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      If (insertSongs($_POST['aid'], $_POST['alid'], $_POST['sYear'], $_POST['sRoom'])) {
        echo '<div class="alert alert-success" role="alert">Song added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$artists = selectArtists();
include "view-artists-with-albums.php";
include "view-footer.php";
?>
