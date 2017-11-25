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
// $sql = "select * from User U join Role R on U.roleid = R.roleid  where R.roleid = 'Admin'";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo $row["categoryname"];
//     }
// }

$conn->close();

header('Location: admin/index.php');
?>
