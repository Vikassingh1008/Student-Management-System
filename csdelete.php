 <?php
include("csconnection.php");
error_reporting(0);

$rn=$_GET['rn'];
//echo "vikas";

$query="DELETE FROM cs WHERE id= '$rn'";
$data=mysqli_query($con,$query);
if($data)

{
	//echo "<font color='red'>recorded deleted form database";
	header('location:csshow.php');
}
else
 {
	echo "<font color='red'>recorded failed form database";
}

?>
