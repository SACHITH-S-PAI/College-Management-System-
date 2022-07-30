$pno = $_POST['phoneno'];

$con = mysqli_connect('127.0.0.1:3307', 'root');
mysqli_select_db ($con, 'chprovider');
$query = "select * from user where phone=$pno;";

$result=mysqli_query($con, $query);
$row = mysqli_fetch_row($result);
if(!$row){
  header("Location: {$_SERVER['HTTP_REFERER']}");
  exit;
}