<?php

//Get values passed from form in login.php file
	$usn = $_POST['usn'];
	$password = $_POST['password'];

	include 'connect.php';
	//to prevent mysql injection
	$usn = stripcslashes($usn);
	$password = stripcslashes($password);
	//$usn = mysqli_real_escape_string($usn);
	//$password = mysqli_real_escape_string($password);

	//connect to server and select database
	//mysql_connect("127.0.0.1:3307","root","");
	//mysql_select_db("mini");

	//Query the database

	$selquery = "select * from student where USN = '$usn' and password = '$password' ";

	$result = mysqli_query($con, $selquery)
				or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_assoc($result);

	if($row['usn'] == $usn && $row['password'] == $password){
		echo "Login Successful ! Welcome ".$row['usn'];

	}	else{
		echo "Failed to login!";
	}			


?>



	


