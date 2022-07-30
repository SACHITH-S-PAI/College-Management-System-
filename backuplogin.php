<?php

$username = "root";
$password = "";
$server = "127.0.0.1:3307";
$database = "mini";

include 'connect.php';
 new mysqli($server, $username, $password, $database);

if(isset($_POST['login'])){
  $usn = $_POST['usn'];
  $pass = $_POST['password'];

  $sql = " select * from student where USN='$usn' and password=$pass ;";
  //$sql = " select * from student where USN='1BG18CS002' and password='12345' ;";
 
  $res = mysqli_query($con, $sql);

  if($res){
    echo "Login Successful";
    exit();
  }else{
    echo "Incorrect Credentials";
    exit();
  }


}



?>
<script >alert('Welcome, Admin')</script>



<label>Status</label>
        <input type="text" name="status" autocomplete="off" class="form-control">


        <label>Subject</label>
          <input type="text" name="sub" autocomplete="off" class="form-control">



          <td> <a href=' delete.php?id=".$row['USN']" ' .></a> </td>






          <?

/*include 'connect.php';
//include 'studlogin.php';
if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }

if(isset($_POST['submit'])){
  $subcode = $_POST['subcode'];
  $sub = $_POST['course'];
  $date = $_POST['date'];

  $usn = $_POST['usn'];
                $str = $_POST['password'];
                $pass = md5($str);
                //$password = $_POST['password'];

                $_SESSION['user'] = $usn;

  $retquery = " select USN,Name,Branch,Semester,Mobile from student where USN="$_SESSION['user']" ";
  //$retquery = " select USN,Name,Branch,Semester,Mobile from student where USN="1BG18CS002" ";
  //$insquery = " insert into exams(Subject_Code,Subject,Date) values('18CS51','Mgmt','2021-02-11')";
   echo $retquery;
   
   $query = mysqli_query($con, $retquery);

   $fetch = mysqli_fetch_assoc($con, $query);

   $display = $fetch['USN'];

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
*/
?>

          <input type="text" name="dept" autocomplete="off" class="form-control">

          <input type="text" name="design" autocomplete="off" class="form-control">

          
                if($row){
                  ?>
                  <script >//alert('Welcome, $usn')  </script>
                  <?php 
                  //echo 'Login Successful';
                  header('Location: index.php');

                }else{
                  ?>
                  <script >alert('Invalid USN or Password !!')</script>
                  <?php
                  //echo 'Unsuccessful Login';
                }

            }

?>