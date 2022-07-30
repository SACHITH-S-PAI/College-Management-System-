 <?php
            $msg = '';
            include 'connect.php';
            if (isset($_POST['login']) && !empty($_POST['usn']) 
               && !empty($_POST['password'])) {
        
               if ($_POST['usn'] == 'admin' && 
                  $_POST['password'] == '12345') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['usn'] = 'admin';

                  ?>
                  
                  <script >alert('Welcome, Admin')</script>
                  <?php
               }else {
                  ?>
                  <script >alert('Wrong Credentials')</script>
                  <?php
               }
            }
         ?>







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


<div class="container vh-100">
  <div class="row justify-content-center  h-100">
    <div class="card w-25 my-auto shadow">
      <div class="card-header text-center"><h2>Admin Login</h2>
      </div>
      <div class="card-body">
        <form action="#" method="post">
          <div class="form-input">
            <label for="username">Username</label>
            <input type="text" id="username" class="form-control" name="usn" required/>
          
      </div>
      <div class="form-input">
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
</div>
</div>

</body>
</html>

