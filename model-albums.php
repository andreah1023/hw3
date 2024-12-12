<?php
function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_id, album_number, album_name FROM `album`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAlbums($aNumber, $aName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `album` (`album_number`, `album_name`) VALUES (?, ?)";
        $stmt->bind_param("ss", $aNumber, $aName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAlbums($aNumber, $aName, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `album` set `album_number` = ?, `album_name` = ? where album_id = ?");
        $stmt->bind_param("ssi", $aNumber, $aName, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAlbums($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from album where album_id=?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
