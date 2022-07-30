<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style>
body {
  background-image: url('pics/bg.jpg') ;
}
</style>

<body>


<div class="container vh-50">
  <div class="row justify-content-center  h-50">
    <div class="card w-25 my-auto shadow">
      <div class="card-header text-center"><h2>Student Login</h2>
      </div>
      <div class="card-body">
        <form action="loginconnect.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" id="username" class="form-control" name="usn" required/>
          
      </div>
      <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" required/>
    </div>
    <input type="submit" class="btn btn-primary w-100" value="Login" name="login">
  </form>
  </div>
  <div class="card-footer text-right">
    <small>&copy; B.N.M. Institute of Technology</small>
  </div>
</div>


<br>
<br>

<div class="container vh-50">
  <div class="row justify-content-center h-50">
    <div class="card w-25 my-auto shadow">
      <div class="card-header text-center"><h2>Admin Login</h2>
      </div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" id="username" class="form-control" name="usn" required/>
      </div>
      <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" required/>
    </div>
    <input type="submit" class="btn btn-primary w-100" value="Login" name="">
  </form>
  </div>
  <div class="card-footer text-right">
    <small>&copy; B.N.M. Institute of Technology</small>
  </div>
</div>








</body>
</html>