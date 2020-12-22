<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/2.jpg" alt="">
				</div>
				<form action="connect.php" method="post" autocomplete="off">
					<h3>Registration Form</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" name="firstname" class="form-control" required>
						<input type="text" placeholder="Last Name" name="lastname" class="form-control" required>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Username" name="username" class="form-control" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="email" class="form-control" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control" required>
							<option value="" disabled selected>Gender</option>
							<option value="male" name="gender">Male</option>
							<option value="female" name="gender">Female</option>
							<option value="other" name="gender">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Password" name="password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" name="cpassword" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button type="submit" name="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>

	</body>
</html>