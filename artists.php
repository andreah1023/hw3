<?php
require_once("util-db.php");
require_once("model-artists.php");

$pageTitle = "Artists";
include "view-header.php";
$artists = selectArtists();
include "view-artists.php";
include "view-footer.php";
//this is the control for artists and we're creating the view and model files
?>
