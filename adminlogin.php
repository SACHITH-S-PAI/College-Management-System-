<!DOCTYPE html>
<html>
<head>
    <title>login Page</title>
  <link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>
<body>
  
  <form action="adminprocess.php" method="post">
  <div class="imgcontainer">
    <img src="https://www.karnataka.com/wp-content/uploads/2014/03/bnmit-bangalore.jpg" class=resp>
  </div>
  <div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select designation:</option>
    <option value="1">Student</option>
    <option value="2">Admin</option>
  </select>
</div>

  <div class="container">
    <label for="admin username"><b>admin username</b></label>
    <input type="text" placeholder="Enter admin Username" name=" admin username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="password">Forgot <a href="#">password?</a></span>

<!-- Surround the select box within a "custom-select" DIV element.
Remember to set the width: -->


  </div>
</form>

</body>
</html>