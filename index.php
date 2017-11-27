<!DOCTYPE html>
<html lang="en">
<!-- Final  -->
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
    <meta name="author" content="">
    <title>Sloty - Homepage</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="assets/css/shop-homepage.css" rel="stylesheet">
	<?php
	if (session_status() == PHP_SESSION_NONE) {
		    session_start();
	}
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
</head>

<body>
    <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    	<div class="container">
        	<a class="navbar-brand" href="http://35.163.12.144/slotyworld">Sloty</a>
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          		<span class="navbar-toggler-icon"></span>
        	</button>
        	<div class="collapse navbar-collapse" id="navbarResponsive">
          		<ul class="navbar-nav ml-auto">
            		<li class="nav-item active">
              			<a class="nav-link" href="#">Home<span class="sr-only">(current)</span>
              			</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#">Test</a>
            		</li>
					<li class="nav-item">
              			<a class="nav-link" href="#">Test2</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="about/index.html">About</a>
            		</li>
            		<li class="nav-item">
						<?php if(isset($_SESSION['wppa'])):?>
						<span>
							(<a class="nav-link" href="logout.php">Logout</a>)</span>
						<?php else: ?>
						<a class="nav-link" href="login.php">Login</a>
						<?php endif; ?>

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
            		<a href="category1.php" class="list-group-item">
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
            		<a href="category2.php" class="list-group-item">
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
            		<a href="category3.php" class="list-group-item">
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

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
						<div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://35.163.12.144/slotyworld/assets/picture/software/kaspersky-small office.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://35.163.12.144/slotyworld/assets/picture/others/sd-64gb.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://35.163.12.144/slotyworld/assets/picture/others/canon-pixma-ip8770.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

						<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/hardware/fx-6300.jpg" alt=""></a>
								<div class="card-body">
                  <h4 class="card-title">
                    <a href="item11.php">
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
										</a>
                  </h4>
                  <h5>
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
                  </h5>
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
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

						<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/hardware/ssd-apacer.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item12.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 10002";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										      // output data of each row
										      while($row = $result->fetch_assoc()) {
										          echo $row["productname"];
										      }
										  }

											?>
                    </a>
                  </h4>
                  <h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 10002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
                  </h5>
                  <p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 10002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card h-100">
								<a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/hardware/amd-rx-550.jpg" alt=""></a>
								<div class="card-body">
									<h4 class="card-title">
										<a href="item13.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 10003";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
															echo $row["productname"];
													}
											}

											?>
										</a>
									</h4>
									<h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 10003";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
									</h5>
									<p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 10003";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
									</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card h-100">
								<a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/software/kaspersky-small office.jpg" alt=""></a>
								<div class="card-body">
									<h4 class="card-title">
										<a href="item21.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 20001";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
															echo $row["productname"];
													}
											}

											?>
										</a>
									</h4>
									<h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 20001";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
									</h5>
									<p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 20001";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
									</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb-4">
							<div class="card h-100">
								<a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/software/bitdefender-plus- 2017.jpg" alt=""></a>
								<div class="card-body">
									<h4 class="card-title">
										<a href="item22.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 20002";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
															echo $row["productname"];
													}
											}

											?>

										</a>
									</h4>
									<h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 20002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
									</h5>
									<p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 20002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
									</p>
								</div>
								<div class="card-footer">
									<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/software/eset-nod32-antivirus.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item23.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 20003";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													// output data of each row
													while($row = $result->fetch_assoc()) {
															echo $row["productname"];
													}
											}

											?>

                    </a>
                  </h4>
                  <h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 20003";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
                  </h5>
                  <p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 20003";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

						<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/others/sd-64gb.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item31.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 30001";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										      // output data of each row
										      while($row = $result->fetch_assoc()) {
										          echo $row["productname"];
										      }
										  }

											?>
										</a>
                  </h4>
                  <h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 30001";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
                  </h5>
                  <p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 30001";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

						<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://35.163.12.144/slotyworld/assets/picture/others/drone-dji.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item32.php">
											<?php
											//statement
											$sql = "select productname from Product where productid = 30002";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										      // output data of each row
										      while($row = $result->fetch_assoc()) {
										          echo $row["productname"];
										      }
										  }

											?>

                    </a>
                  </h4>
                  <h5>
										<?php
										//statement
										$sql = "select price from Product where productid = 30002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["price"];
												}
										}

										?>
										บาท
                  </h5>
                  <p class="card-text">
										<?php
										//statement
										$sql = "select details from Product where productid = 30002";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
														echo $row["details"];
												}
										}

										?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

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
