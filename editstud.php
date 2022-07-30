<?php

include 'connect.php';
 
$id = $_GET['id'];

if(mysqli_connect_errno()) { echo "Error: Could not connect to database."; exit; }

//if (!$con) {
  //  die("Connection failed: " . mysqli_connect_error());


// sql to delete a record
$sql = " update student set 'USN' "; 
//$sql = " delete from student where USN = '1BG18CS001' "; 


//echo $sql;

$res2 = mysqli_query($con, $sql);
//$row = mysqli_fetch_row($res2);
//echo 'Successful';


if ($res2) {
    //mysqli_close($con);
    
    ?>
    <script>
      alert("Data Deleted");
    </script>
    <?php
    header('Location: studtable.php'); //If book.php is your main page where you list your all records
    exit;
} else {
	?>
    <script>
      alert("Error deleting record");
    </script>
    <?php
   // header('Location: studtable.php');
    
}
?>