<?php
    $host = "35.163.12.144";
    $username = "int203";
    $password = "lovesql";
    $database = "int203";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);
    if(!$conn){
      echo $conn;
    }
    // mysql_query("use ".$database);
    // $objDB = mysql_select_db(int203);
    $sql = "select * from Product";
    // $data = mysql_query($query);
    $result = $conn->query($sql);


  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["productId"]. " - Name: " . $row["productName"]. " " . $row["price"]. "<br>";
      }
  } else {
      echo "0 results";
  }
  $conn->close();

  ?>
