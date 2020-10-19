<?php
$host= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "beauty salon";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if(!$conn){
	die ("Connnection Error");
}
if(isset($_POST['sumbit'])){
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$subject= $_POST['subject'];
	
	$select="select * from contact us where email='$email'";
	$match=mysqli_query($conn,$select);
	$numr=mysqli_num_rows($match);
	if($numr==1){
		echo "This email is already registered";
	}else{
		$insert="INSERT INTO contact us VALUES('$firstname','$lastname','$email','$subject')";
		mysqli_query($conn,$insert);
		echo "Data Successfully Inserted";
	}
}
?>