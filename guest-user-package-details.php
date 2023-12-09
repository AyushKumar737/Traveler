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

    <script src="https://kit.fontawesome.com/8c7e0740b8.js" crossorigin="anonymous"></script>
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
                    <a class="text-primary px-3" href="new-user-login.php">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a class="text-primary px-3" href="user-login.php">
                        <i class="fa-solid fa-circle-user"></i>
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
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="guest-user-package.php" class="nav-item nav-link">Tour Packages</a>
                    <a href="guest-user-package-details.php" class="nav-item nav-link active">Package Details</a>
                    <a href="guest-user-room-details.php" class="nav-item nav-link">Room Services</a>
                    <a href="Querry.php" class="nav-item nav-link">Querry</a>
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
                <h3 class="display-4 text-white text-uppercase">Packages Details</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Packages Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Details -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages Details</h6>
                <h1>Explore Package Details</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://wallpapercave.com/wp/wp6612913.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Varanasi</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.pexels.com/photos/14617402/pexels-photo-14617402.jpeg?cs=srgb&dl=pexels-alok-kumar-14617402.jpg&fm=jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Kedarnath</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://e0.pxfuel.com/wallpapers/123/534/desktop-wallpaper-badrinath-temple.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Badrinath</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1583143874828-de3d288be51a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bXVzc29vcmllJTJDJTIwaW5kaWF8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Mussoorie</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.pexels.com/photos/602607/pexels-photo-602607.png?cs=srgb&dl=pexels-roney-john-602607.jpg&fm=jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Agra</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src=" https://plus.unsplash.com/premium_photo-1673288455625-fa00f5ff831f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Krabi</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1683442130903-19272738de77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=876&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Neemrana</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1642516864651-ed817c229a9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=872&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Lonavala</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1581791534721-e599df4417f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Kasol</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1135820309/photo/amber-fort-and-maota-lake-jaipur-rajasthan-india.jpg?s=612x612&w=0&k=20&c=raUKDB1Mris9Z7SjvuuTieZRzF2-CaKukGvTC8t1kuo=" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Jaipur</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src=" https://images.unsplash.com/photo-1566959621395-9200c65ba74b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGpvZGhwdXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=600" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Jhodhpur</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/8/8e/PremMandirSideViewFromCanteen.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Vrindavan</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://lp-cms-production.imgix.net/2022-03/500pxRF_26117913.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Lucknow</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1596021688656-35fdc9ed0274?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cmlzaGlrZXNofGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60 " alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Rishikesh</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1661096143891-82d6d72700fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fG1hdGh1cmF8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Mathura</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://wallpaperaccess.com/full/5686615.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Dwaraka</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://memorableindia.com/blog/wp-content/uploads/2019/05/tea-garden-1024x768.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Guwahti</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://t4.ftcdn.net/jpg/04/82/09/83/360_F_482098383_n6JMrdv1bBwHYXX27qQGalGJ97xa1eK2.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Puri</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/458237899/photo/kumbh-mela-in-haridwar.jpg?s=612x612&w=0&k=20&c=PkjlCGNP0BgGslwoi1jF5IhdX7TsVPQ7taiKOvhmEgU=" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Haridwar</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://hblimg.mmtcdn.com/content/hubble/img/rameshwaram/mmt/activities/t_trp/m_Ramanathaswamy%20Temple-5_l_407_640.jpg?im=Resize=(824,1123.37)" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Rameshwaram</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="https://c4.wallpaperflare.com/wallpaper/524/7/684/temples-harmandir-sahib-amritsar-golden-temple-wallpaper-preview.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <a class="destination-overlay text-white text-decoration-none" href="user-login.php">
                            <h5 class="text-white">Amritsar</h5>
                            <span>Package Include</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


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