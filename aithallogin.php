<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-orange.css">
<style>
body {
font-family: Arial;
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}

/* Style the tab */
.tab {
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  justify-content: center;
  align-items: center;
  display:block;
  overflow: hidden;
  width: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  width:49%;
  border: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  justify-content: center;
  align-items: center;
  display: inline-block;
  overflow: hidden;
  float:none
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  padding: 6px 12px;
  text-align:center;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  justify-content: center;
  align-items: center;
  cursor: pointer;
  font-size: 28px;
}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], input[type=tel]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.sub{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

</style>
</head>
<body background="img/login.jpg">

<div class="w3-theme-d5">
  <br>
  <h1><center>Welcome To TV Provider Services</center></h1>
  <br>
</div>
<br><br><br><br><br><br><br>
<div class="tab">
  <button class="tablinks" onclick="openLogin(event, 'Customer')" id="defaultOpen">Customer</button>
  <button class="tablinks" onclick="openLogin(event, 'Admin')">Admin</button>
</div>

<div id="Customer" class="tabcontent">
  <form action="customer.php" method="post">
    <label for="phoneno"><b>Mobile No.</b></label>
    <input type="tel" placeholder="Enter Mobile No." name="phoneno" required>

    <button class="sub" type="submit">Login</button>
  </form>
</div>

<div id="Admin" class="tabcontent">
  <form action="studentindex.php" method="post">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button class="sub" type="submit">Login</button>
  </form>
</div>

<script>
function openLogin(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>