<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="profiled.php">Profile<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attendance.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exams.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faculties.php">Faculties</a>
        </li>

       
      </ul>
     
    </div>
  </div>
</nav>
<?php
    include("connect.php");
?>
<?php 
$strSQL = "SELECT USN, Name, Branch, Semester, Mobile_No FROM student  ";
 $result = mysqli_query( $con, $strSQL );

 while($row = mysqli_fetch_array($result)) {
  $USN = $row['USN'];
  $name= $row['Name'];
  $branch=$row['Branch'];
  $semester= $row['Semester'];
  $mobno= $row['Mobile_No'];
}
?>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Student Profile 
    </h2>
  </div>
  <div class="w-50 m-auto">
  	<form action="profilenew.php" method="post">
  		<div class="form-group">
  			<label>USN</label>
        <input class="form-control " type="text" value="<?php echo $USN?>" readonly>
  			
  		</div>
  		<div class="form-group">
  			<label>Name</label>
        <input class="form-control " type="text" value="<?php echo $name?>" readonly>
  			
  		</div>
  		<div class="form-group">
  			<label>Branch</label>
        <input class="form-control" type="text" value="<?php echo $branch?>" readonly>
  			
  		</div>
  		<div class="form-group">
  			<label>Semester</label>
        <input class="form-control" type="text" value="<?php echo $semester?>" readonly>
  			
  		</div>
  		<div class="form-group">
  			<label>Mobile Number</label>
        <input class="form-control " type="text" value="<?php echo $mobno?>" readonly>
  			
  		</div>
  		
  	</form>
  </div>
</section>

</table><br />
<footer>
  <p class="p-3 bg-dark text-white text-center"> © B.N.M. Institute of Technology
    
  </p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>						
</body>
</html>