
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<p class="error"><?php echo $error; ?></p>
		<p class="success"><?php echo $success; ?></p>
		<form method="post">
			<div class="form-input">
				<i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
				<input type="text" name="usn" value="" placeholder="Enter USN" required><br>
				<i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
				<input type="text" name="pass" value="" placeholder="Enter Password" required><br>
				<input type="submit" name="submit" value="Login"><br>


			</div>
		</form>
	</div>
</body>
</html>