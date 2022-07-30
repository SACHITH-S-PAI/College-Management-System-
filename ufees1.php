<?php


include 'ufeesconnect.php';


if(isset($_POST['submit'])){
  $usn = $_POST['usn'];
  $feesdesc = $_POST['desc'];
  $amount = $_POST['amt'];
  $due = $_POST['due'];
  $status = $_POST['status'];



  $insertquery1 = "INSERT into fees(USN, Fees Description, Amount, Due_date, Status) values('$usn','$feesdesc','$amount','$due','$status')";

​
  $res = mysqli_query($fee, $insertquery1);

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
