<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
</head>
<body>
	<!-- <hr color="red"> -->
		<hr size="20"  color="blue"   />

	
	<div class="container">
		<h2 class="text-center text-success">Student Login Form</h2>
		<hr size="20"  color="red"   />
		<div class="row">


			<div class="col-lg-6">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
					
					<div class="form-group">
						<label for="">Username</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Password</label>

						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary"> Login</button>
				</form>
			</div>



			<!-- sign -->
			<div class="col-lg-6">
				<h2>Sign Form</h2>
				<form action="registation.php" method="post">
					
					<div class="form-group">
						<label for="">Username</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Password</label>

						<input type="password" name="password" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary"> Signin</button>
				</form>
			</div>


		</div>
		<hr size="20"  color="red"   />
	</div>
	
</body>
</html>