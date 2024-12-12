<?php
function selectSongsByAlbum($alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.album_id, album_number, album_name, release_year, room FROM `album` a join song s on s.album_id = a.album_id where s.album_id=?");
        $stmt->bind_param("i", $alid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
