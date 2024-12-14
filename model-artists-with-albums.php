<?php
function selectArtists() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name, room_number FROM `artist`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAlbumsByArtist($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.album_id, album_number, album_name, release_year, room FROM `album` a join song s on s.album_id = a.album_id where s.artist_id=?");
        $stmt->bind_param("i", $aid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSongs($aid, $alid, $sYear, $sRoom) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `song` (`artist_id`, `album_id`, `release_year`, `room`) VALUES ('2', '4', '2015', '2334')");
        $stmt->bind_param("iiss", $aid, $alid, $sYear, $sRoom);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateSongs($aid, $alid, $sYear, $sRoom, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `song` set `artist_id` = ?, 'album_id' = ?, `release_year` = ?, 'room' = ? where song_id = ?");
        $stmt->bind_param("iissi", $aid, $alid, $sYear, $sRoom, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteSongs($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from song where song_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
