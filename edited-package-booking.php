<?php
include('connection.php');
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

	<!-- Booking Starts-->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap2.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style3.css" />

	<script src="https://kit.fontawesome.com/8c7e0740b8.js" crossorigin="anonymous"></script>

	<style>
		#bar {
			font-weight: bold;
			font-size: 1.575rem;
		}
	</style>
</head>

<body>

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
						<a href="user.php" class="nav-item nav-link" style="font-size:1.2em;"><i class="fa-solid fa-house-chimney" style="margin-right:5px;"></i>Home</a>
						<a href="package.php" class="nav-item nav-link" style="font-size:1.2em;"><i class="fa-solid fa-earth-asia" style="margin-right:5px;"></i>Tour Packages</a>
						<a href="Room-Details.php" class="nav-item nav-link" style="font-size:1.2em;"><i class="fa-solid fa-hotel" style="margin-right:5px;"></i>Room Servics</a>
						<a href="your-booking.php" class="nav-item nav-link" style="font-size:1.2em;"><i class="fa-solid fa-address-card" style="margin-right:5px;"></i>Your Booking</a>
						<a href="edited-package-booking.php" class="nav-item nav-link active" style="font-size:1.2em;">Edit-Booking</a>
						<a href="feedback.php" class="nav-item nav-link" style="font-size:1.2em;"><i class="fa-solid fa-comment" style="margin-right:5px;"></i>Feedback</a>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Navbar End -->

	

	<div id="booking" class="section" style="margin-bottom:65px;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Your Travel Package</h1>
						</div>

						<?php

						if (isset($_GET['p_id'])) {
							$p_id = $_GET['p_id'];
							$query = "SELECT * FROM package_booking WHERE p_id='$p_id' LIMIT 1";
							$query_run = mysqli_query($conn, $query);

							if (mysqli_num_rows($query_run) > 0) {
								$row = mysqli_fetch_array($query_run);

						?>

								<form action="user_booking_edit.php" method="POST">
									<div class="form-group">
										<input name="name" class="form-control" type="text" value="<?= $row['first_name'] ?>" placeholder="Enter Your First Name">
										<span class="form-label">FIRST NAME</span>
									</div>
									<div class="form-group">
										<input name="lname" class="form-control" type="text" value="<?= $row['last_name'] ?>" placeholder="Enter Your Last Name">
										<span class="form-label">LAST NAME</span>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input name="datei" class="form-control" type="date" value="<?= $row['check_in'] ?>" required>
												<span class="form-label">Check In</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input name="dateo" class="form-control" type="date" value="<?= $row['check_out'] ?>" required>
												<span class="form-label">Check out</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<select name="select_package" class="form-control" required>
													<option value="<?= $row['select_package'] ?>" selected hidden>Select Package</option>
													<option></option>
													<option>Varanasi</option>
													<option>Kedarnath</option>
													<option>Badrinath</option>
													<option>Mussoorie</option>
													<option>Agra</option>
													<option>Manali</option>
													<option>Goa</option>
													<option>Maldives</option>
													<option>Krabi</option>
													<option>Neemrana</option>
													<option>Lonavala</option>
													<option>Kasol</option>
													<option>Shimla</option>
													<option>Leh</option>
													<option>Jaipur</option>
													<option>Jhodhpur</option>
													<option>Vrindavan</option>
													<option>Lucknow</option>
													<option>Kochi</option>
													<option>Rishikesh</option>
													<option>Mathura</option>
													<option>Dwaraka</option>
													<option>Guwahti</option>
													<option>Haridwar</option>
													<option>Rameshwaram</option>
													<option>Amritsar</option>
													<option></option>
												</select>
												<span class="select-arrow"></span>
												<span class="form-label">PACKAGES</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input name="adults" class="form-control" value="<?= $row['adults'] ?>" type="number" size="2" value="0" min="1" placeholder="No. of Adults">
												<span class="form-label">Adults</span>
												<!-- <select class="form-control" required>
											<option name="adults" value="adults" selected hidden>No. of Adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span> -->
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input name="child" class="form-control" value="<?= $row['child'] ?>" type="number" size="2" value="0" min="0" placeholder="No. of Children">

												<!-- <select class="form-control" required>
											<option name="child" value="child" selected hidden>No. of Children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select> -->
												<span class="select-arrow"></span>
												<span class="form-label">Children</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<select name="room" class="form-control" required>
													<span class="form-label"></span>
													<option value="" selected hidden>Type Of room</option>
													<option></option>
													<option>Junior Suite</option>
													<option>Executive Suite</option>
													<option>Super Deluxe</option>
													<option>Beachfront</option>
													<option>Presidential Suites</option>
													<option>Penthouse Suites</option>
													<option>Honeymoon Suites</option>
													<option>Standard Suites</option>
													<option>Resort</option>
													<option></option>
												</select>
												<span class="select-arrow"></span>
												<span class="form-label">Rooms</span>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<select name="service" class="form-control" required>
													<option value="" selected hidden>Type of Service</option>
													<option></option>
													<option>None</option>
													<option>Rooms & Appartment</option>
													<option>Food & Restaurant</option>
													<option>Spa & Fitnesst</option>
													<option>Sports & Gaming</option>
													<option>Event & Party</option>
													<option>GYM & Yoga</option>
													<option></option>
												</select>
												<span class="select-arrow"></span>
												<span class="form-label">Rooms</span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input name="email" class="form-control" value="<?= $row['email'] ?>" type="email" placeholder="Enter your Email">
												<span class="form-label">Email</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input name="mobile" class="form-control" value="<?= $row['mobile'] ?>" type="tel" placeholder="Enter you Phone">
												<span class="form-label">Phone</span>
											</div>
										</div>
									</div>
									<div class="form-btn">
										<button name="submit" class="submit-btn">Update</button>
									</div>
								</form>
							<?php
							} else {
							?>
								<h4>No package found</h4>

						<?php
							}
						} else {
							echo '<h1 class="mb-20">please select package from Table</h1>';
						}


						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery1.min.js"></script>
	<script>
		$('.form-control').each(function() {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function() {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

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