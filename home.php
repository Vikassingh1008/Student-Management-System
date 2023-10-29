<?php
session_start();
if (!isset($_SESSION['username'])) 
{
	# code...

header('location:login.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no", initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylea.css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.js" type="text/javascript"></script>

  <style>
  	
</style>
</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-success  sticky-top">

  	<a href="navbar.html" class="navbar-brand "><img src="images/vikas.png" class=" img-fluid rounded-circle"alt="" style="width: 50px; height: auto;"></a>
  	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menubar">
  		<span class="navbar-toggler-icon">
  			
  		</span>

  	</button>
  	<div id="menubar" class="collapse navbar-collapse">
  	 <ul class="navbar-nav">
  		
  		  		<li class="nav-item dropdown">
  			 <a href="" class="nav-link dropdown-toggle " data-toggle="dropdown" style="color: red">Departmental Detail</a>
  			 <div class="dropdown-menu">
  			 	<a href="#" class="dropdown-item">Computer science & engg</a>
  			 	<a href="#" class="dropdown-item">Civil Eegineering</a>

                 <a href="#" class="dropdown-item">Electrical engineering</a>


  	</div>
  		</li>
  		<li class="nav-item">
  			<a href="" class="nav-link" style="color: red ">About </a>
  		</li>
  		<li class="nav-item ">
  			<a href="" class="nav-link" style="color: red">Contact</a>
  		</li>

</ul>
<ul class="navbar-nav ml-auto ">
  		

  		<li class="nav-item">
  			
  			<a href="logout.php" class="nav-link "  style="color: red" >Logout</a>
  		</li>
  	</ul>

  	</ul>
  </div>

  </nav>


  
<!-- slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				
				<div class="carousel slide" data-ride="carousel" id="myslider">

					
						
						<ol class="carousel-indicators">
							<li data-slide-to="0" class="active"></li>
							<li data-slide-to="1"></li>
							<li data-slide-to="2"></li>
							<li data-slide-to="3"></li>
							<li data-slide-to="4"></li>
							<li data-slide-to="5"></li>
						</ol>
				

					<div class="carousel-inner">
						<div class="carousel-item active"><img src="slider/e.jpg" alt="">
							<div class="carousel-caption">
								<p>first image</p>
							</div>
							
						</div>
						<div class="carousel-item"><img src="slider/f.jpg" alt="">
							<div class="carousel-caption">
								<p>second image</p>
							</div>
						</div>
						<div class="carousel-item"><img src="slider/g.jpg" alt="">
							<div class="carousel-caption">
								<p>third image</p>
							</div>
						</div>
						<div class="carousel-item"><img src="slider/h.jpg" alt="">
							<div class="carousel-caption">
								<p>fourth image</p>
							</div>
						</div>
						<div class="carousel-item"><img src="slider/i.jpg" alt="">
							<div class="carousel-caption">
								<p>fifth image</p>
							</div>
						</div>
						<div class="carousel-item"><img src="slider/j.jpg" alt="">
							<div class="carousel-caption">
								<p>six image</p>
							</div>
						</div>
						

					</div> <!-- inner -->
					

				</div><!-- carosel slider -->

				<a href="#myslider" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>


				<a href="#myslider" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
			</div>
		</div>
	</div>

	<br>
 
 <!-- botton -->




<div class="container">
		<div class="row">
			<div class="col-md-4" id="aa">
				<button class="btn btn-block btn-outline-danger" type="button" data-toggle="modal" data-target="#openmodal"><a href="cs.php">Cs Student</a></button>
			</div>
			<div class="col-md-4" id="aa">
			<button class="btn btn-block btn-outline-danger" type="button" data-toggle="modal" data-target="#openmodal"><a href="civil.php">Civil Student</a></button>
		</div>
		<div class="col-md-4" id="aa">
			<button class="btn btn-block btn-outline-danger" type="button" data-toggle="modal" data-target="#openmodal"><a href="electrical.php">Electrical.php</a></button>
		</div>
	</div>
</div>
	<br/>

		<!-- card related -->
		
<div class="container">
   <div class="row  ">
      <div class=" col-sm-4">
        <div class="card btn-outline-danger">
           <div class="card-header ">
                vikas
            </div>

            <img src="images/back.jpg" >

            </div>
        </div>

        <div class="col-sm-4">
            <div class="card btn-outline-danger">
                <div class="card-header">
                    vikas
                </div>

                <img src="images/back.jpg "  >

            </div>
        </div>

        <div class=" col-sm-4">
            <div class="card btn-outline-danger">
                <div class="card-header">
                    vikas
                </div>

                <img src="images/back.jpg" >
            </div>
        </div>
    </div><!--row closed-->
</div><!--container closed-->



		<!-- footer realted -->

		<br/>
		<br/>

		<div class="container-fluid ">
			<div class="row jumbotron-fluid bg-dark">
				
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
				
				<marquee behavior="alternative" direction=""><p style="color: red">******Designed by Vikas Singh*********</marquee>

			</div>
		</div> 
	
	
</body>
</html>