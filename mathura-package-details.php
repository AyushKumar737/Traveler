<?php
echo '
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

    <!-- Stylesheet For Booking Button-->
    <link href="css/style-btn.css" rel="stylesheet">

</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>Ayush@gmail.com</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+91 7376468331</p>
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
                        <a href="user.php" class="nav-item nav-link">Home</a>
                        <a href="package.php" class="nav-item nav-link">Tour Packages</a>
                        <a href="package-details.php" class="nav-item nav-link active">Package Details</a>
                        <a href="Room-Details.php" class="nav-item nav-link">Room Servics</a>
                        <a href="your-booking.php" class="nav-item nav-link">Your Booking</a>
                        <a href="feedback.php" class="nav-item nav-link">Feedback</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Place Name</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Place Name</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Place Name</h6>
                <h1>Explore About Place Name</h1>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pb-3">
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none">Place Name</p>
                                    </div>
                                    <p >Place Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none" >Place Name</p>
                                    </div>
                                    <p >Place Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none">Place Name</p>
                                    </div>
                                    <p >Place Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none" >Place Name</p>
                                        
                                    </div>
                                    <p>Place Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none">Place Name</p>
                                    </div>
                                    <p>Place Description</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="https://images.pexels.com/photos/36762/scarlet-honeyeater-bird-red-feathers.jpg?auto=compress&cs=tinysrgb&w=600" alt="Network Error" style="width: 500px; height: 235px;">
                                </div>
                                <div class="bg-white p-4">
                                    <div class="d-flex mb-2">
                                        <p class="text-primary text-uppercase text-decoration-none">Place Name</p>
                                
                                    </div>
                                    <p>Place Description</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Highligts</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Highligts</p>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <p class="text-dark"><i class="fa fa-angle-right text-primary mr-2"></i>Highligts
                                    </p>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <p class="text-dark">
                                        <i class="fa fa-angle-right text-primary mr-2"></i>Highligts
                                    </p>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <p class="text-dark">
                                        <i class="fa fa-angle-right text-primary mr-2"></i>Highligts 
                                    </p>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <p class="text-dark">
                                        <i class="fa fa-angle-right text-primary mr-2"></i>Highligts
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Offers</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                    </div>
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Adds</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <a href="package-booking.php"> <button class="neon-button">Book Now</button> </a>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed
                    vero lorem dolor dolor</p>
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
                <p><i class="fa fa-map-marker-alt mr-2"></i>Ampics Ganpat University</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 7376468331</p>
                <p><i class="fa fa-envelope mr-2"></i>Ayush@gmail.com.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; TRAVELER</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by Ayush</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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
';
?>