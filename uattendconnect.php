<?php 

$username = "root";
$password = "";
$server = '127.0.0.1:3307';
$database = 'mini';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn){
	echo "Connection Successful";
	?>

	<script >alert('Connection Successful');</script>

	<?php 

}else{
	echo "No Connection";
}

 ?>