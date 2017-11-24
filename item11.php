<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sloty - Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>
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

		?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Sloty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">SLOTYWORLD SHOP</h1>
          <div class="list-group">
            <a href="#" class="list-group-item active">
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
            <a href="#" class="list-group-item">
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
            <a href="#" class="list-group-item">
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
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h3 class="card-title">
                <?php
                //statement
                $sql = "select productname from Product where productid = 10001";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["productname"];
                    }
                }

                ?>
              </h3>
              <h4>
                <?php
                //statement
                $sql = "select price from Product where productid = 10001";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["price"];
                    }
                }

                ?>
                บาท
              </h4>
              <p class="card-text">
                <?php
                //statement
                $sql = "select details from Product where productid = 10001";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["details"];
                    }
                }

                ?>
              </p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
              Product Reviews
            </div>
            <div class="card-body">
              <p>
                <?php
                  //statement
                  $sql = "select commentdetail from ProductComment where productId = 10001";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                          echo $row["commentdetail"];
                      }
                  }

                ?>
              </p>
               </p>
              <small class="text-muted">Posted by
                <?php
                //statement
                $sql = "select u.fname, u.lname from User u
                        join ProductComment pc on pc.userid = u.userid where pc.userid = 3";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["commentdetail"];
                    }
                }
                ?>
              </small>
              <hr>
              <p>
                <?php
                //statement
                $sql = "select commentdetail from ProductComment where productid = 10001";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["commentdetail"];
                    }
                }
                ?>
              </p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <p>
                <?php
                //statement
                $sql = "select commentdetail from ProductComment where productid = 10001";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["commentdetail"];
                    }
                }
                ?>
              </p>
              <small class="text-muted">Posted by Anonymous on 3/1/17</small>
              <hr>
              <a href="#" class="btn btn-success">Leave a Review</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
