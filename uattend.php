<!DOCTYPE html>
<html>
<head>
  <title> </title>
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
        <li class="nav-item active">
          <a class="nav-link" href="uattendance.php">Attendance<span class="sr-only">(current)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fees</a>
        </li>

       
      </ul>
     
    </div>
  </div>
</nav>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Update Attendance 
    </h2>
  </div>
  <div class="w-50 m-auto">
    <form action="uattendance.php" method="post">
      <div class="form-group">
        
            <label for="sel1">Course Name</label>
                <select name="course" class="form-control" id="sel1">
                  <option>Mathematics 1</option>
                  <option>Physics</option>
                  <option>Basic Electrical</option>
                  <option>Elements of Civil Engineering</option>
                </select>
        </div>

        <div class="form-group">
        <label>USN</label>
        <input type="text" name="usn" autocomplete="off" class="form-control">
      </div>
        <div class="form-group">
        <label>Total number of Classes</label>
        <input type="text" name="total" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Classes Attended</label>
        <input type="text" name="attended" autocomplete="off" class="form-control">
      </div>
      
      <input type="submit" class="btnSubmit" name="submit" value="Submit"/>
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






<?php 
include 'connect.php';

if(isset($_POST['submit'])){
  $course = $_POST['course'];
  $usn = $_POST['usn'];
  $totalclasses = $_POST['total'];
  $attended = $_POST['attended'];
  

  $insertquery = " INSERT INTO uattendance(Course Name, USN, Total Classes, Classes Attended) VALUES ('$course','$usn','$totalclasses','$attended')";


  $res = mysqli_query($con, $insertquery);

  if($res){

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
