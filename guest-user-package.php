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
                        <p><i class="fa fa-envelope mr-2"></i>Traveler8331@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 9879882388</p>
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
                        <a href="index.php" class="nav-item nav-link" style="margin-right:20px;"><i class="fa-solid fa-house-chimney" style="margin-right:5px;"></i>Home</a>
                        <a href="guest-user-package.php" class="nav-item nav-link active" style="margin-right:20px;"><i class="fa-solid fa-earth-asia" style="margin-right:5px;"></i>Tour Packages</a>
                        <!-- <a href="guest-user-package-details.php" class="nav-item nav-link">Package Details</a> -->
                        <a href="guest-user-room-details.php" class="nav-item nav-link" style="margin-right:20px;"><i class="fa-solid fa-hotel" style="margin-right:5px;"></i>Room Services</a>
                        <a href="Querry.php" class="nav-item nav-link" style="margin-right:20px;"><i class="fa-solid fa-person-circle-question" style="margin-right:5px;"></i>Querry</a>
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
                <h3 class="display-4 text-white text-uppercase">Tour Packages</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Tour Packages</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tour Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Goa</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1 <small>(6789)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\goa-package-details.php">Discover amazing places of the Goa with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1590523277543-a94d2e4eb00b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1332&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Maldives</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(6894)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\maldives-package-details.php">Discover amazing places of the Maldives with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src=" https://plus.unsplash.com/premium_photo-1673288455625-fa00f5ff831f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Krabi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small>(4239)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\krabi-package-details.php">Discover amazing places of the Krabi with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1683442130903-19272738de77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=876&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Neemrana</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4 <small>(5211)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\neemarana-package-details.php">Discover amazing places of the Neemrana with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1642516864651-ed817c229a9f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=872&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Lonavala</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>2 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1<small>(4781)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\lonavala-package-details.php">Discover amazing places of the Lonavala with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1581791534721-e599df4417f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1331&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Kasol</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small>(4571)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\kasol-package-details.php">Discover amazing places of the Kasol with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://ihplb.b-cdn.net/wp-content/uploads/2014/06/Best-Things-to-do-in-Shimla.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Shimla</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.6 <small>(3991)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\shimla-package-details.php">Discover amazing places of the Shimla with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1536295243470-d7cba4efab7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGxlaHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Leh</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.7 <small>(2251)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\leh-package-details.php">Discover amazing places of the Leh with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/1135820309/photo/amber-fort-and-maota-lake-jaipur-rajasthan-india.jpg?s=612x612&w=0&k=20&c=raUKDB1Mris9Z7SjvuuTieZRzF2-CaKukGvTC8t1kuo=" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jaipur</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small>(1776)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\jaipur-package-details.php">Discover amazing places of the Jaipur us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src=" https://images.unsplash.com/photo-1566959621395-9200c65ba74b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGpvZGhwdXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=600" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jhodhpur</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4 <small>(1897)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\jodhpur-package-details.php">Discover amazing places of the Jhodhpur with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/8/8e/PremMandirSideViewFromCanteen.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Vrindavan</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.9 <small>(2355)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\vrindavan-package-details.php">Discover amazing places of the Vrindavan with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://lp-cms-production.imgix.net/2022-03/500pxRF_26117913.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Lucknow</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(2125)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\lucknow-package-details.php">Discover amazing places of the Lucknow with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1605955794720-651b9ae7f5e7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8a29jaGl8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Kochi</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.1<small>(3314)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\kochi-package-details.php">Discover amazing places of the Kochi with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1596021688656-35fdc9ed0274?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cmlzaGlrZXNofGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60 " alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Rishikesh</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(2033)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\rishikesh-package-details.php">Discover amazing places of the Rishikesh with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1661096143891-82d6d72700fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fG1hdGh1cmF8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Mathura</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small>(2321)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\mathura-package-details.html">Discover amazing places of the Mathra with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://wallpaperaccess.com/full/5686615.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Dwaraka</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.2 <small>(1998)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\dwaraka-package-details.php">Discover amazing places of the Dwarka with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://memorableindia.com/blog/wp-content/uploads/2019/05/tea-garden-1024x768.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Guwahti</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.4 <small>(2579)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\guwathi-package-details.php">Discover amazing places of the Guwahti with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://t4.ftcdn.net/jpg/04/82/09/83/360_F_482098383_n6JMrdv1bBwHYXX27qQGalGJ97xa1eK2.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Puri</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(3211)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\puri-package-details.php">Discover amazing places of the Puri with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/458237899/photo/kumbh-mela-in-haridwar.jpg?s=612x612&w=0&k=20&c=PkjlCGNP0BgGslwoi1jF5IhdX7TsVPQ7taiKOvhmEgU=" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Haridwar</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(2234)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\haridwar-package-details.php">Discover amazing places of the Haridwar with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://hblimg.mmtcdn.com/content/hubble/img/rameshwaram/mmt/activities/t_trp/m_Ramanathaswamy%20Temple-5_l_407_640.jpg?im=Resize=(824,1123.37)" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Rameshwaram</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.6 <small>(3170)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\rameshwaram-package-details.php">Discover amazing places of the Rameshwaram with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="https://c4.wallpaperflare.com/wallpaper/524/7/684/temples-harmandir-sahib-amritsar-golden-temple-wallpaper-preview.jpg" alt="Network Error" style="width: 500px; height:230px;">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Amritsar</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4<small>(2250)</small></h6>
                            </div>
                            <p class="h5 text-decoration-none" href="Packages-Details\amritsar-package-details.php">Discover amazing places of the Amritsar with us</p>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-0">35000</h5>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="user-login.php">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px; width:75vw;">
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
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important; width:75vw; margin-bottom:80px;">
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
