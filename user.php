<?php
session_start();
if(!isset($_SESSION["user"]))
{
    header("Location: user-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c7e0740b8.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>Traveler8331@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 9879882388</p>
                    </div>
                </div>
                
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary pl-3" href="user-logout.php">
                        <i class="fas fa-sign-out-alt" style="color: #7AB730;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="user.php" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="user.php" class="nav-item nav-link active"><i class="fa-solid fa-house-chimney" style="margin-right:5px;"></i>Home</a>
                        <a href="package.php" class="nav-item nav-link"><i class="fa-solid fa-earth-asia" style="margin-right:5px;"></i>Tour Packages</a>
                        <a href="Room-Details.php" class="nav-item nav-link"><i class="fa-solid fa-hotel" style="margin-right:5px;"></i>Room Servics</a>
                        <a href="your-booking.php" class="nav-item nav-link" ><i class="fa-solid fa-address-card" style="margin-right:5px;"></i>Your Booking</a>
                        <a href="feedback.php" class="nav-item nav-link"><i class="fa-solid fa-comment" style="margin-right:5px;"></i>Feedback</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Collect Moment Not Things.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Travel is An Investment In Yourself.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-5.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Travel Far Enough To Find Yourself.</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-6.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">It Is Better To Travel Well than to arrive.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore
                            sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et
                            erat sed diam duo</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                            style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Over India Coverage</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Top Rated Tour Packages</h1>
            </div>
            <div class="row">
            <?php
                include('connection.php');

                $query = "SELECT * FROM add_package";
                $query_run = mysqli_query($conn, $query);

                $check_package = mysqli_num_rows($query_run) > 0;

                if ($check_package) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="./img/<?php echo $row['image']; ?>" alt="Network Error"
                            style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $row['place']; ?></small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i><?php echo $row['days']; ?></small>
                                <!-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(8789)</small> -->
                                </h6>
                            </div>
                            <a class="h5 text-decoration-none" href="package-details.php?Id=<?php echo $row['Id']; ?>"><?php echo $row['pname']; ?></a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0"><?php echo $row['price']; ?></h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="package-booking.php">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

}
} else {
echo "no record found";
}

?>
    <!-- Packages End -->

                <!-- Testimonial Start -->
                <div class="container-fluid py-5">
                    <div class="container py-5">
                        <div class="text-center mb-3 pb-3">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                            <h1>What Say Our Clients</h1>
                        </div>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-center pb-4">
                                <img class="img-fluid mx-auto" src="img/testimonial-1.jpg"
                                    style="width: 100px; height: 100px;">
                                <div class="testimonial-text bg-white p-4 mt-n5">
                                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet
                                        amet eirmod
                                        eos labore diam
                                    </p>
                                    <h5 class="text-truncate">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <img class="img-fluid mx-auto" src="img/testimonial-2.jpg"
                                    style="width: 100px; height: 100px;">
                                <div class="testimonial-text bg-white p-4 mt-n5">
                                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet
                                        amet eirmod
                                        eos labore diam
                                    </p>
                                    <h5 class="text-truncate">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <img class="img-fluid mx-auto" src="img/testimonial-3.jpg"
                                    style="width: 100px; height: 100px;">
                                <div class="testimonial-text bg-white p-4 mt-n5">
                                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet
                                        amet eirmod
                                        eos labore diam
                                    </p>
                                    <h5 class="text-truncate">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <img class="img-fluid mx-auto" src="img/testimonial-4.jpg"
                                    style="width: 100px; height: 100px;">
                                <div class="testimonial-text bg-white p-4 mt-n5">
                                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet
                                        amet eirmod
                                        eos labore diam
                                    </p>
                                    <h5 class="text-truncate">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->


                <!-- Footer Start -->
                <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
                    <div class="row pt-5">
                        <div class="col-lg-3 col-md-6 mb-5">
                            <a href="" class="navbar-brand">
                                <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1>
                            </a>
                            <p>Embark on a journey of discovery with our TRAVELER website, where wanderlust meets convenience.</p>
                            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                            <div class="d-flex justify-content-start">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>About</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Destination</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Services</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Packages</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Guides</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Testimonial</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>About</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Destination</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Services</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Packages</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Guides</p>
                                <p class="text-white-50 mb-2"><i class="fa fa-angle-right mr-2"></i>Testimonial</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                            <p><i class="fa fa-map-marker-alt mr-2"></i>411, Arya Epoch opp. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passport Seva, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ahmedabad, Gujarat.</p>
                            <p><i class="fa fa-phone-alt mr-2"></i>+91 9879882388</p>
                            <p><i class="fa fa-envelope mr-2"></i>Traveler8331.com.com</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
                    <div class="row">
                        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                            <p class="m-0 text-white-50">Copyright &copy; TRAVELER</a>. All Rights Reserved.</a>
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-md-right">
                            <p class="m-0 text-white-50">Designed by Ayush & Manav</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->




            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="fa fa-angle-double-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>
