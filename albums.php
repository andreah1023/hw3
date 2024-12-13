<?php
require_once("util-db.php");
require_once("model-albums.php");

$pageTitle = "Albums";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      if (insertAlbum($_POST['aName'],$_POST['aNumber'])) {
      echo '<div class="alert alert-success" role="alert"> A album has been added!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;

     case "Edit": 
      if (updateAlbum($_POST['aName'],$_POST['aNumber'],$_POST['aid'])) {
      echo '<div class="alert alert-success" role="alert"> A album has been edited!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
    
      case "Delete": 
      if (deleteAlbum($_POST['aid'])) {
      echo '<div class="alert alert-success" role="alert"> A album has been deleted!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
   
  }
}

$albums=selectAlbums();
include "view-albums.php";
include "view-footer.php";
?>
