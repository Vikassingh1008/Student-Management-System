<?php
include("csconnection.php");
error_reporting(0);

$id=$_GET['id'];
$us=$_GET['us'];
$fn=$_GET['fn'];
$mn=$_GET['mn'];
$d=$_GET['d'];
$g=$_GET['g'];
$n=$_GET['n'];
$e=$_GET['e'];




?>

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
  			<a href="" class="nav-link" style="color:red">About </a>
  		</li>
  		<li class="nav-item ">
  			<a href="" class="nav-link" style="color:red">Contact</a>
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
			


			<div class="col-lg-12">

				<form action="csshow.php" method="post">
				
					<div class="form-group">
						<label for="">StudentId</label>

						<input type="text" name="sid" class="form-control" value="<?php echo "$id"?>">
					</div>


					<div class="form-group">
						<label for="">Name</label>

						<input type="text" name="user" class="form-control" value="<?php echo "$us"?>">
					</div>


					<div class="form-group">
						<label for="">Father Name</label>

						<input type="text" name="fname" class="form-control" value="<?php echo "$fn"?>">
					</div>


					<div class="form-group">
						<label for="">Mother Name</label>

						<input type="text" name="mname" class="form-control" value="<?php echo "$mn"?>">
					</div>
					
								
					<div class="form-group">
						<label for="">Date of Birth</label>

						<input type="text"  name="dob" class="form-control" value="<?php echo "$d"?>">
					</div>


					<div class="form-group">
						<label for="">Gender</label>

						<input type="text" name="gender" class="form-control" value="<?php echo "$g"?>">
					</div>


					<div class="form-group">
						<label for="">Mobile No</label>

						<input type="number" name="no" class="form-control" value="<?php echo "$n"?>">
					</div>


					<div class="form-group">
						<label for="">Email</label>

						<input type="text" name="email" class="form-control" value="<?php echo "$e"?>">
					</div>
					
				</div>
				<br/>
				
					<div class="col text-center">
      <button class="btn btn-primary" type="submit" name="submit">submit</button>
    </div>
					
					
			
				


		</form>
				
			</div>


		</div>
		<br/>

		


		<!-- <div class="container">
			
			<div class="row">
				<div class="col-md-4"></div>

				<div class="col-md-4"><button class="btn btn-block btn-outline-danger" type="button" data-toggle="modal" data-target="csconnect.php">Submit</button></div>

				<div class="col-md-4"></div>
			</div>
		</div>
		<hr size="20"  color="red"   />
	</div> -->
	
<!-- footer -->

	
</body>
</html>


<?php
//include("csconnection.php");

if(isset($_GET['submit']))
{
	//$rnd=$_GET['id'];
	$sid=$_GET['sid'];
	$user=$_GET['user'];
	$fname=$_GET['fname'];
	$mname=$_GET['mname'];
	$dob=$_GET['dob'];
	$gender=$_GET['gender'];
	$no=$_GET['no'];
	$email=$_GET['email'];




$query="update cs set sid='$sid',user='$user',fname='$fname',mname='$mname',dob='$dob',gender='$gender',no='$no',email='$email' WHERE sid='$sid'";

$data=mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('data update successfully')</script>";
}
else
{
	echo "failed to update record";
}
}



?>



