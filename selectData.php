<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php
    $servername = "35.163.12.144";
    $username = "int203";
    $password = "lovesql";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    if($conn == false){
      die("ERROR: Could not correct.".mysqli_connect_error());
    }
    //select query execution
    $sql = "SELECT * FROM Product";
    // if($result = mysqli_query($conn, $sql)){
    //   if(mysqli_num_rows($result) > 0){
    //
    //   }
    // }
    echo $sql;
    ?>
  </body>
</html>
