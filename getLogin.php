<?php
session_start();
$servername = "35.163.12.144";
$username = "int203";
$password = "lovesql";
$dbname = "int203";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// set parameters and execute
$username = $_REQUEST['username'];
$password = md5($_REQUEST['password']);


// prepare and bind
$stmt = $conn->prepare("SELECT * FROM User where email = ? and password = ?");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$result = $stmt->get_result();
while ($data = $result->fetch_assoc()) {
    $wppa = array(
        'username' => $data['email'],
        'password' => $data['password']
    );
    $_SESSION['wppa'] = $wppa;
    // print_r($_SESSION['wppa']);
    break;
}
$stmt->close();
$conn->close();

header('Location: index.php');
?>
