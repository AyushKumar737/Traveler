<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib3/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib3/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap5.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/admin-style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="admin-index.php" class="navbar-brand mx-4 mb-3">
                    <h3 style="color:#28a745;"><i class="fa fa-user-edit me-2"></i>TRAVELER</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/admin.jpg" alt="" style="width: 80px; height: 75px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Ayush Kumar</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin-index.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>View Pakages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="admin-view-pakage.php" class="nav-item nav-link">view user booking</a>
                            <a href="admin-view-details.php" class="nav-item nav-link active">View Package Details</a>
                            <!-- <a href="admin-view-room.php" class="nav-item nav-link">View Room Services</a> -->
                        </div>
                    </div>


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Edit Pakages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="admin-edit-pakage.php" class="nav-item nav-link">Add Packages</a>
                            <a href="admin-edit-detail.php" class="nav-item nav-link">Edit Package Details</a>
                            <!-- <a href="admin-edit-room.php" class="nav-item nav-link">Edit Room Services</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Admin section</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="admin-blank.php" class="nav-item nav-link"></i>Add admin</a>
                            <a href="admin-update.php" class="nav-item nav-link">Edit admin details</a>     
                        </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="admin-index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/admin.jpg" alt="" style="width: 80px; height: 75px;">
                            <span class="d-none d-lg-inline-flex">Ayush Kumar</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="Admin-login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Admin Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All Packages</h6>
                        <!-- <a href="">Show All</a> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <!-- <th scope="col"><input class="form-check-input" type="checkbox"></th> -->
                                    <th scope="col">Id</th>
                                    <th scope="col">pname</th>
                                    <th scope="col">price</th>
                                    <th scope="col">image</th>
                                    <th scope="col">place</th>
                                    <th scope="col">days</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include('connection.php');

                            if ($conn) {
                                // echo "connected";
                            } else {
                                echo "error";
                            }
                            $sql = "SELECT * FROM add_package";
                            $result = $conn->query($sql);

                            if (!$result) {
                                echo "error";
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        
                                        <td>" . $row["Id"] . "</td> 
                                        <td>" . $row["pname"] . "</td>
                                        <td>" . $row["price"] . "</td>
                                        <td>" . $row["image"] . "</td>
                                        <td>" . $row["place"] . "</td>
                                        <td>" . $row["days"] . "</td>
                                        <td><a class='btn btn-success btn-sm' href='admin-edit-detail.php?Id=$row[Id]'>Edit</a></td>
                                        <td><a class='btn btn-danger btn-sm' href='admin-table-package-delete.php?Id=$row[Id]'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Admin End -->


            <!-- <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">feedback Table</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('connection.php');

                            if ($conn) {
                                echo "connected";
                            } else {
                                echo "error";
                            }
                            $sql = "SELECT * FROM feedback";
                            $result = $conn->query($sql);

                            if (!$result) {
                                echo "error";
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        
                                        <td>" . $row["Id"] . "</td>
                                        <td>" . $row["fname"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["subject"] . "</td>
                                        <td>" . $row["message"] . "</td>
                                        <td><a class='btn btn-danger btn-sm' href='admin-table-delete.php?Id=$row[Id]'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div> -->

            <!-- <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">query Table</h6>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('connection.php');

                            if ($conn) {
                                echo "connected";
                            } else {
                                echo "error";
                            }
                            $sql = "SELECT * FROM querry";
                            $result = $conn->query($sql);

                            if (!$result) {
                                echo "error";
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        
                                        <td>" . $row["Id"] . "</td>
                                        <td>" . $row["name"] . "</td>
                                        <td>" . $row["email"] . "</td>
                                        <td>" . $row["subject"] . "</td>
                                        <td>" . $row["message"] . "</td>
                                        <td><a class='btn btn-danger btn-sm' href='admin-table-query-delete.php?Id=$row[Id]'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div> -->
            <!-- <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">View Packages</h6>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Package Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">images</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('connection.php');

                            if ($conn) {
                                echo "connected";
                            } else {
                                echo "error";
                            }
                            $sql = "SELECT * FROM add_package";
                            $result = $conn->query($sql);

                            if (!$result) {
                                echo "error";
                            }

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        
                                        <td>" . $row["Id"] . "</td> 
                                        <td>" . $row["pname"] . "</td>
                                        <td>" . $row["price"] . "</td>
                                        <td>" . $row["image"] . "</td>
                                        <td><a class='btn btn-success btn-sm' href='admin-form.php?Id=$row[Id]'>Edit</a></td>
                                        <td><a class='btn btn-danger btn-sm' href='admin-table-package-delete.php?Id=$row[Id]'>Delete</a></td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div> --> 
            <!-- <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Bordered Table</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Table Without Border</h6>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
            <!-- <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Table End -->



            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">TRAVELER</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you\'d like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="">Ayush & Manav</a>
                            <br>Distributed By: <a href="index.php" target="_blank">TRAVELER</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib3/chart/chart.min.js"></script>
    <script src="lib3/easing/easing.min.js"></script>
    <script src="lib3/waypoints/waypoints.min.js"></script>
    <script src="lib3/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib3/tempusdominus/js/moment.min.js"></script>
    <script src="lib3/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib3/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main5.js"></script>
</body>

</html>