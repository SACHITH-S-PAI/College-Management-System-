<?php 
session_start();
if($_SESSION['status'] != "Active")
{
  header("location: adminform.php");
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Attendance </title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">B.N.M. Institute of Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uteacher.php">Faculty</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="uattendance.php">Attendance<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="uexams.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ufees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogout.php">Logout</a>
        </li>

       
      </ul>
     
    </div>
  </div>
</nav>
<?php 

/*include 'connect.php';
$usn = $_SESSION['user'];
$usn = mysqli_real_escape_string($con, $usn);
$query = " SELECT * from student where USN='$usn' ";
//$query = " SELECT * from student where USN='1BG18CS002' ";

$res = mysqli_query($con, $query) or die('SQL Error: ' .mysqli_error($con));
$row = mysqli_fetch_array($res);*/



?>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Update Attendance 
    </h2> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="attendancep.php">View Attendance</a>
  </div>
  <div class="w-50 m-auto">
    <form action="uattendance.php" method="post">
      
		<form action="/action_page.php">
  		<label for="fname">USN</label><br>
  		<input type="text" id="fname" name="usn" value="<?php id=".$row['USN']." ?>" disabled><br>




        <div class="form-group">
        <label>USN</label>
        <input type="text" name="usn" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">