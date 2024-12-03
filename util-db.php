<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'andreaph_hw3user', 'Vb[B}~.z](JP', 'andreaph_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
