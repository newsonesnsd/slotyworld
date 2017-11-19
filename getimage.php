<?php
    $id = $_GET['id'];
    // do some validation here to ensure id is safe
    $link = mysql_connect("35.163.12.144", "int203", "lovesql");
    // use name of dababase instead
    mysql_select_db("test");
    // use sql command to get image here
    $sql = "SELECT  FROM  WHERE id=$id";
    $result = mysql_query("$sql");
    $row = mysql_fetch_assoc($result);
    mysql_close($link);
    header("Content-type: image/jpeg");
    // show image
    echo $row['dvdimage'];
?>


// how to use
<!-- <body>
    <img src="getImage.php?id=1" width="175" height="200" />
</body> -->
