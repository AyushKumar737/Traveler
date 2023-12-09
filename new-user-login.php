<?php
session_start();
if(isset($_SESSION["user"]))
{
    header("Location: user.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>User Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style4.css">
	
	<script src="https://kit.fontawesome.com/8c7e0740b8.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<a href="index.php"><i class="fa-solid fa-house"></i></a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Already Have an Account</h2>
								<a href="user-login.php" class="btn btn-white btn-outline-white">Click here</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">User Sign Up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>

					<?php
					
					if(isset($_POST["signup"]))
					{
						$name = $_POST["name"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$rpassword = $_POST["rpassword"];

						$passwordhash = password_hash($password, PASSWORD_DEFAULT);
						
						$errors = array();

						if(empty($name) OR empty($email) OR empty($password) OR empty($rpassword))
						{
							array_push($errors,"all fields are reqiured");
						}
						if(!filter_var($email, FILTER_VALIDATE_EMAIL))
						{
							array_push($errors,"email is not valid");
						}
						if (strlen($password)<8)
						{
							array_push($errors,"password must be 8 character long");
						}
						if($password!==$rpassword)
						{
							array_push($errors,"password does not match");
						}
						require_once "connection.php";
						$sql = "SELECT * FROM registration WHERE email = '$email'";
						$result = mysqli_query($conn, $sql);
						$rowcount = mysqli_num_rows($result);
						if($rowcount>0)
						{
							array_push($errors, "email already exist");
						}
						if(count($errors)>0)
						{
							foreach ($errors as $error) {
								echo "<div class='alert alert-danger'>$error</div>";
							}
						}
						else
						{
							
							$sql = "INSERT INTO registration (name, email, password) VALUES ( ?, ?, ? )";
							$stmt = mysqli_stmt_init($conn);
							$preparestmt = mysqli_stmt_prepare($stmt,$sql);
							if($preparestmt)
							{
								mysqli_stmt_bind_param($stmt, "sss", $name, $email, $passwordhash);
								mysqli_stmt_execute($stmt);
								echo "<div class = 'alert alert-success'>you are registered succesfully</div>";
							}
							else
							{
								die ("something went wrong");
							}
						}
					}
					
					?>
					
							<form action="new-user-login.php" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
							<i class="fa-solid fa-user"></i>
			      			<label class="label" for="name">Your Name</label>
			      			<input type="text" name="name" class="form-control" placeholder="Your Name" required>
			      		</div>
		            <div class="form-group mb-3">
						<i class="fa-solid fa-envelope"></i>
		            	<label class="label" for="email">Your Mail</label>
		              <input type="email" name="email" class="form-control" placeholder="Your Mail" required>
		            </div>
					<div class="form-group mb-3">
						<i class="fa-solid fa-lock"></i>
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control" placeholder="Password" required>
		            </div>
					<div class="form-group mb-3">
						<i class="fa-solid fa-lock"></i>
		            	<label class="label" for="password">Repeat Password</label>
		              <input type="password" name="rpassword" class="form-control" placeholder="Repeat Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="signup" class="form-control btn btn-primary submit px-3">Sign Up</button>
		            </div>
		            <div class="form-group d-md-flex">
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery2.min.js"></script>
	<script src="js/popper1.js"></script>
	<script src="js/bootstrap2.min.js"></script>
	<script src="js/main2.js"></script>

	</body>
</html>
