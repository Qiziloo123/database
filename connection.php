<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="airlinedb";

// Create connection
$conn =mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
else{
echo "Connected successfully";
if (isset($_POST['submit'])){
    $name_box=  $_POST['name_box'];
	$Email_box=   $_POST['Email_box'];
	$cate=	 $_POST['cate'];
	$points1=$_POST['points1'];
	$points2=$_POST['points2'];
	$points3=$_POST['points3'];
	$points4=$_POST['points4'];
	$txtarea=$_POST['txtarea'];
}
}
$data="INSERT INTO reviews_tb(Customer_Name,Customer_email,Cate_Name,Review1,Review2,Review3,Review4,Description)values('$name_box','$Email_box','$cate','$points1','$points2','$points3','$points4','$txtarea')";
if(mysqli_query($conn, $data)) {
	echo"review has been posted successfully";
}else{
	echo"error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>
