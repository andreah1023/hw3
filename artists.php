<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add": 
      if (insertArtist($_POST['aName'],$_POST['aNumber'])) {
      echo '<div class="alert alert-success" role="alert"> A doctor has been added!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;

     case "Edit": 
      if (updateDoctor($_POST['dName'],$_POST['dSpecialization'],$_POST['did'])) {
      echo '<div class="alert alert-success" role="alert"> A doctor has been edited!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
    
      case "Delete": 
      if (deleteDoctor($_POST['did'])) {
      echo '<div class="alert alert-success" role="alert"> A doctor has been deleted!</div>';
      } else {
      echo '<div class="alert alert-danger" role="alert"> Error!</div>'; 
      }
      break;
   
  }
}

$artists=selectArtists();
include "view-artists.php";
include "view-footer.php";
?>
