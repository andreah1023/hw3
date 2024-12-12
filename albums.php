<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      If (insertAlbums($_POST['aNumber'], $_POST['aName'])) {
        echo '<div class="alert alert-success" role="alert">Course added.</div>"';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      If (deleteAlbums($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Course deleted.</div>"';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}
  
$albums = selectAlbums();
include "view-albums.php";
include "view-footer.php";
?>
