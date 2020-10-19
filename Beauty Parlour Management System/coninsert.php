<?php
$host= "localhost";
$dbUsername= "root";
$dbPassword= "";
$dbname= "beauty parlour salon";
$conn=mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['sumbit'])){
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$subject= $_POST['subject'];
	$sql = "INSERT INTO contact VALUES ('$firstname','$lastname','$email','$subject')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>