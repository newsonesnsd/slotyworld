<?php
    $servername = "35.163.12.144";
    $username = "int203";
    $password = "lovesql";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

   // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }  
    echo "Connected successfully";
?>
