<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44','roshanou_hw3user', 'MIS4013-001', 'roshanou_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
