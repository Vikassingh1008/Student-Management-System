<?php
include_once('csconnection.php');
$query="select * from cs";
$result=mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no", initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<style>
		th
		{
			color: red;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class= "col-md-12">

			<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-lg table-dark" >
  <thead >
  	<tr> <th colspan="10"><h3 align="center">Student Record</h3></th></tr>
    <tr >
      <th scope="col">S.No</th>
      <th scope="col">Student Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father Name</th>
        <th scope="col">Mother Name</th>
      <th scope="col">DOB</th>
       <th scope="col">Gender</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email Id</th>
      <th scope="col">Update</th>
       <th scope="col">Delete</th>
       

    </tr>

 


   
  </thead>
  <?php

  while($rows=mysqli_fetch_assoc($result))
  {
  	?>
  	<tr>
  		<td><?php echo $rows['id']; ?></td>
  		<td><?php echo $rows['sid']; ?></td>
  		<td><?php echo $rows['user']; ?></td>
  		<td><?php echo $rows['fname']; ?></td>
  		<td><?php echo $rows['mname']; ?></td>
  		<td><?php echo $rows['dob']; ?></td>
  		<td><?php echo $rows['gender']; ?></td>
  		<td><?php echo $rows['no']; ?></td>
  		<td><?php echo $rows['email']; ?></td>

  		<td><a href ="csupdate.php?rnd=<?php echo $rows['id'];?>&id=<?php echo $rows['sid'];?>&us=<?php echo $rows['user'];?>
  		&fn=<?php echo $rows['fname'];?>&mn=<?php echo $rows['mname'];?>&d=<?php echo $rows['dob'];?>
  		&g=<?php echo $rows['gender'];?>
  		&n=<?php echo $rows['no'];?>&e=<?php echo $rows['email'];?>">Update </a></td>

  		<td><a href ="csdelete.php?rn=<?php echo $rows['id'];?>"> Delete </a></td>

  	</tr>
<?php

  }
  ?>
</table>
</div>
</div>
</div>
</div>


</body>
</html>