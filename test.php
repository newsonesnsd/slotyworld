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
          $sql = "select * from User U join Role R on U.roleid = R.roleid  where R.roleid = 'Customers'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "id" .$row["userid"]."</br>";

              }
          }


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
