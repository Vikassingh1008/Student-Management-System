<?php
$sid=$_POST['sid'];
$user=$_POST['user'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$no=$_POST['no'];
$email=$_POST['email'];

//database connecton
$con=new mysqli('localhost','root','','demo');
if($con->connect_error){
	die('Connection Failed:'.$con->connect_error);

}else
{
	$stmt=$con->prepare("insert into cs(sid,user,fname,mname,dob,gender,no,email)
		values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssisis",$sid,$user,$fname,$mname,$dob,$gender,$no,$email);
	$stmt->execute();
	header('location:csshow.php');
	$stmt->close();
	$con->close();
}



?>