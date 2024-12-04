<?php
require_once("util-db.php");
require_once("model-songs-by-album.php");

$pageTitle = "Songs by Album";
include "view-header.php";
$songs = selectSongsByAlbum($_POST['alid']);
include "view-songs-by-album.php";
include "view-footer.php";
?>
