<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Show Users</title>
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
        mysqli_set_charset($conn,"utf8");
    ?>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sloty - Dashboard</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pie-chart fa-fw"></i> Stock<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="stock1.php">
                                        <?php
                                            //statement
                                            $sql = "select categoryname from Category where categoryname = 'Hardware'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo $row["categoryname"];
                                                }
                                            }
                                        ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="stock2.php">
                                        <?php
                							//statement
                							$sql = "select categoryname from Category where categoryname = 'Software'";
                							$result = $conn->query($sql);
                							if ($result->num_rows > 0) {
                								// output data of each row
                								while($row = $result->fetch_assoc()) {
                									echo $row["categoryname"];
                								}
                							}
                						?>
                                    </a>
                                </li>
                                <li>
                                    <a href="stock3.php">
                                        <?php
                							//statement
                							$sql = "select categoryname from Category where categoryname = 'Others'";
                							$result = $conn->query($sql);
                							if ($result->num_rows > 0) {
                								// output data of each row
                								while($row = $result->fetch_assoc()) {
                									echo $row["categoryname"];
                								}
                							}
                						?>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="invoice.php"><i class="fa fa-shopping-cart fa-fw"></i> Invoice</a>
                        </li>
                        <li>
                            <a href="tracking.php"><i class="fa fa-truck fa-fw"></i>Tracking</a>
                        </li>
                        <li>
                            <a href="qurey1.php"><i class="fa fa-edit fa-fw"></i> Qurey 1</a>
                        </li>
                        <li>
                            <a href="qurey2.php"><i class="fa fa-edit fa-fw"></i> Qurey 2</a>
                        </li>
                        <li>
                            <a href="qurey3.php"><i class="fa fa-edit fa-fw"></i> Qurey 3</a>
                        </li>
                        <li>
                            <a href="qurey4.php"><i class="fa fa-edit fa-fw"></i> Qurey 4</a>
                        </li>
                        <li>
                            <a href="qurey5.php"><i class="fa fa-edit fa-fw"></i> Qurey 5</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Qurey: 3
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- Show All Users -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SQL Statement
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                              <td>#</td>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Date of Birth</th>
                                            <th>Telephone</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Postcode</th>
                                            <th>Password</th>
                                            <th>Role ID</th>
                                            <th>Invoice ID</th>
                                            <th>Total Price</th>
                                            <th>Buytime</th>
                                            <th>Description</th>
                                            <th>userid</th>
                                            <th>cartid</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "select * from User u
                                            left join Invoice i on u.userid = i.userid
                                            where u.roleid = 1
                                            and i.invoiceid is null";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" .$row["userid"]."</td>";
                                                    echo "<td>" .$row["fname"]."</td>";
                                                    echo "<td>" .$row["lname"]."</td>";
                                                    echo "<td>" .$row["email"]."</td>";
                                                    echo "<td>" .$row["gender"]."</td>";
                                                    echo "<td>" .$row["dob"]."</td>";
                                                    echo "<td>" .$row["telno"]."</td>";
                                                    echo "<td>" .$row["address"]."</td>";
                                                    echo "<td>" .$row["city"]."</td>";
                                                    echo "<td>" .$row["postcode"]."</td>";
                                                    echo "<td>" .$row["password"]."</td>";
                                                    echo "<td>" .$row["roleid"]."</td>";
                                                    echo "<td>" .$row["invoiceid"]."</td>";
                                                    echo "<td>" .$row["totalprice"]."</td>";
                                                    echo "<td>" .$row["buytime"]."</td>";
                                                    echo "<td>" .$row["description"]."</td>";
                                                    echo "<td>" .$row["userid"]."</td>";
                                                    echo "<td>" .$row["cartid"]."</td>";
                                                    echo "</tr>";

                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <?php
        $conn->close();
    ?>
</body>

</html>
