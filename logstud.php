<?php

include 'connect.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }

if(isset($_POST['submit'])){
  $subcode = $_POST['subcode'];
  $sub = $_POST['course'];
  $date = $_POST['date'];

  $insquery = " ";

  //$insquery = " insert into exams(Subject_Code,Subject,Date) values('18CS51','Mgmt','2021-02-11')";
   echo $insquery;
   
   $res1 = mysqli_query($con, $insquery);
   echo "Succesful";
   if($res1){
    ?>
    <script>
      alert("Data Inserted");
    </script>
    <?php
  }else{
    ?>
    <script>
      alert("Data Not Inserted ");
    </script>
    <?php
  }
 }
?>






<!DOCTYPE HTML>
<html>
<head>
<title>Student Details</title>
<link href="style.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">B.N.M. Institute of Technology</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logstud.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="facultiesp.php">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attendancep.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="examsp.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fees.php">Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminform.php">Logout</a>
        </li>
        

      </ul>
    </div>
  </div>
</nav>
<section class="my-5">
  <div class="py-5">
    <h1 class="text-center"> Profile 
    </h1> 
  </div>
  <div class="w-50 m-auto">
    <form action="profile.php" method="post">
      <div class="form-group">

<form action="/action_page.php">
  <label for="fname">USN</label><br>
  <input type="text" id="fname" name="usn" value="John"><br>
  <label for="lname">Name</label><br>
  <input type="text" id="lname" name="name" value="Doe"><br><br>
  <label for="lname">Branch</label><br>
  <input type="text" id="lname" name="branch" value="Doe"><br><br>
  <label for="lname">Semester</label><br>
  <input type="text" id="lname" name="sem" value="Doe"><br><br>
  <label for="lname">Mobile</label><br>
  <input type="text" id="lname" name="mob" value="Doe"><br><br>

</form>
</div>
</form>
</div>
</section>


<footer>
  <p class="p-3 bg-dark text-white text-center"> © B.N.M. Institute of Technology
    
  </p>
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>            
</body>
</html>