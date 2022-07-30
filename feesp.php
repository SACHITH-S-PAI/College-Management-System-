<!DOCTYPE HTML>
<html>
<head>
<title>Fees</title>
<link href="style.css" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
  	.payment{
  		background-color: #4CAF50;
  		color: #000000;
  		margin-left: 1200px;
  		margin-top: 200px;
  	}
  </style>
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
          <a class="nav-link" href="profiled.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="attendance.php">Attendance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exams.php">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="fees.php">Fees</a>
        </li>
        <a class="nav-link" href="faculties.php">Faculties</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div>
	<h1 class="text-center">Fees Details</h1>
</div>
<div>
<table class="table table-dark table-bordered table-sm text-center" style="margin-right: auto margin-left: auto">
  <tr>
    <th scope="col">Fees Description</th>
    <th scope="col">Due Date</th>
    <th scope="col">Status</th>
  </tr>
  <?php
  include('connection.php');
$sql = "SELECT * FROM fees";
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr><td>'  . $row["Fees_Description"]. "</td><td> " . $row["Due_Date"]. "</td><td> " . $row["Amount"]. '</td></tr>';
  }
} else {
  echo "0 results";
}
?>
  </table>
</div>
<button type="submit" class="payment">Pay Now</button>
</body>
<footer style="margin-top: 100px">
	<p class="p-3 bg-dark text-white text-center">@B.N.M. Institute of Technology</p>
</footer>
</html>