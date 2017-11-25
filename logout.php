<?php
if (session_status() == PHP_SESSION_NONE) {
        session_start();
}
    $host = "35.163.12.144";
    $username = "int203";
    $password = "lovesql";
    $database = "int203";
    $dbname = "int203";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
    if(!$conn){
        echo "เชื่อมต่อไม่ได้";
    }
?>
