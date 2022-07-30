//include 'ufeesconnect.php';
$username = "root";
$password = "";
$server = '127.0.0.1:3307';
$database = 'mini';

$fee = mysqli_connect($server, $username, $password, $database);

$file = 'debug.log'; 
file_put_contents($file, "Testing logs");

if(isset($_POST['submit'])){
  $usn = $_POST['usn'];
  $feesdesc = $_POST['desc'];
  $amount = $_POST['amt'];
  $due = $_POST['due'];
  $status = $_POST['status'];



  //$insertquery1 = "insert into fees(USN, Amount, Due_date, Status) values('$usn','$amount','$due','$status')";

  $insertquery1 = "insert into fees(USN, Amount, Due_date, Status) values('1BG18CS021','1000','2020-02-04','no')";

​ //console.log ("Hello")
//echo $insertquery1
   $res1 = mysqli_query($fee, $insertquery1);

  if($res1 != NULL){
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