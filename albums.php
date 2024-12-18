<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      If (insertAlbums($_POST['alNumber'], $_POST['alName'])) {
        echo '<div class="alert alert-success" role="alert">Album added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      If (updateAlbums($_POST['alNumber'], $_POST['alName'], $_POST['alid'])) {
        echo '<div class="alert alert-success" role="alert">Album edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      If (deleteAlbums($_POST['alid'])) {
        echo '<div class="alert alert-success" role="alert">Album deleted.</div>';
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
