<?php
include("connection.php");
?>
<!Doctype html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
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
								<h2>Welcome to User login</h2>
								<!-- <p>Don\'t have an account?</p> -->
								<a href="user-login.php" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Admin Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					
					  <?php
// session_start();

// if(isset($_POST['login'])) {
//     $Username = $_POST['Username'];
//     $Password = $_POST['Password'];

    
//     if($Username == 'Username' && $Password == "Password") {
//         $_SESSION['admin'] = $Username;
//         header("Location: admin-index.php");
//         exit();
//     } else {
//         echo "Invalid username or password";
//     }
// }
?>
					<?php
					if(isset($_POST['login']))
					{
						$querry="SELECT * FROM `admin` WHERE `Username`='$_POST[aname]' AND `Password`='$_POST[apass]'";
						$result = mysqli_query($conn, $querry);
						if(mysqli_num_rows($result)==1)
						{
							session_start();
							$_SESSION['Adminid'] = $_POST['aname'];
							header("location: admin-index.php");
						}
						else
						{
							echo "<div class='alert alert-danger'>Username or password does not exist</div>";
							
						}

					}
					
					
					?>
							<form action="Admin-login.php" class="signin-form" method="POST">
			      		<div class="form-group mb-3">
						  <i class="fa-solid fa-user"></i>
						<label class="label" for="name">Username</label>
			      			<input type="text" name="aname" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
						<i class="fa-solid fa-lock"></i>
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="apass" class="form-control" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Log in</button>
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

