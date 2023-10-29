<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/stylea.css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
</head>
<body >



	 <nav class="navbar navbar-expand-lg navbar-light bg-success  sticky-top">
  	
  	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menubar">
  		<span class="navbar-toggler-icon">
  			
  		</span>

  	</button>
  	<div id="menubar" class="collapse navbar-collapse">
  	<ul class="navbar-nav">
  		
  		

  		<li class="nav-item dropdown">
  			 <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: red">Departmental Detail</a>
  			 <div class="dropdown-menu">
  			 	<a href="#" class="dropdown-item">Computer science & engg</a>
  			 	<a href="#" class="dropdown-item">Civil Eegineering</a>

                 <a href="#" class="dropdown-item">Electrical engineering</a>


  			 </div>
  		</li>
  		<li class="nav-item">
  			<a href="" class="nav-link" style="color: red">About </a>
  		</li>
  		<li class="nav-item ">
  			<a href="" class="nav-link" style="color: red">Contact</a>
  		</li>

</ul>
<ul class="navbar-nav ml-auto ">
  		

  		<li class="nav-item">
  			
  			<a href="logout.php" class="nav-link"  style="color: red" >Logout</a>
  		</li>
  	</ul>

  	</ul>
  </div>

  </nav>
	<hr color="red">
	
    
    <!-- student Detail -->
    	<div class="container">
		<h2 class="text-center text-success">Student Details</h2>
		<hr size="20"  color="red"   />
		<div class="row">


			<div class="col-lg-6">
				
				
					
					<div class="form-group">
						<label for="">Student Id</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Name</label>

						<input type="password" name="password" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Father Name</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Mother Name</label>

						<input type="password" name="password" class="form-control">
					</div>
					
					
				
			</div>



			
			<div class="col-lg-6">
				
					<div class="form-group">
						<label for="">Date of Birth</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Gender</label>

						<input type="password" name="password" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Mobile No</label>

						<input type="text" name="user" class="form-control">
					</div>


					<div class="form-group">
						<label for="">Email</label>

						<input type="password" name="password" class="form-control">
					</div>
					
				
				
			</div>


		</div>

		<div class="container">
			
			<div class="row">
				<div class="col-md-4"></div>

				<div class="col-md-4"><button class="btn btn-block btn-outline-danger" type="button" data-toggle="modal" data-target="#openmodal">Submit</button></div>

				<div class="col-md-4"></div>
			</div>
		</div>
		<hr size="20"  color="red"   />
	</div>
	



		<div class="container">
			<div class="row jumbotron-fluid bg-dark ">
				
				<div class="col-md-6">
					<h5 class=" text-success">CONTACT US</h5>
					<p class="text-warning" id="bb">Rampur Kushinagar up-274207</p>

					<p class="text-warning" id="bb">6392247091</p>
					<p class="text-warning" id="bb">vikassingh818283@gmial.com</p>
				</div>


				<div class="col-md-6">
					<h5 class=" text-success">CURRICULAR ACTIVITIES</h5>
					<p class="text-warning" id="bb">Ncc</p>

					<p class="text-warning" id="bb">Cultural Programme</p>
					<p class="text-warning" id="bb">Sport&Games</p>
				</div>
				
				<marquee behavior="alternative" direction=""><p style="color: red">Designed by Vikas Singh</marquee>

			</div>
		</div>

</body>
</html>