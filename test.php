<?php
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
          $sql = "select COUNT(*) AS countUser from User U join Role R on U.roleid = R.roleid WHERE R.roleDescription = 'Customer' group by R.roleid";
          $result = $conn->query($sql);
          while ($item = $result -> fetch_assoc()) {
              # code...
              $item = $item['countUser'];
              echo $item;
              break;
          }
          // if ($result->num_rows > 0) {
          //     // output data of each row
          //     while($row = $result->fetch_assoc()) {
          //         echo "" .$row["count(*)"]."</br>";
          //
          //     }
          // }
?>
<?php
    //statement
    // $sql = "select productname from Product where productid = 10001";
    // $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         echo $row["productname"];
    //     }
    // }
 ?>
