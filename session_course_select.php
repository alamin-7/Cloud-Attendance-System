

<?php 
include('server1.php')
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="register1.php">
    <?php include('error.php'); ?>
    <div class="input-group">
      <label>Username      </label>
      <input type="text" name="username" value="">
    </div>
    
    <div class="input-group">
      <label>Password       </label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
   <h3>Select your session and course name: </h3> 
  <select name="session" id="session">
  <option value="a" >2014-15</option>
  <option value="b">2015-16</option>
  <option value="c">2016-17</option>
  <option value="d">2017-18</option>
  </select>

  
<br>

   <h3>Course Name:</h3>
    <label class="container">Digital Electronics
  <input type="radio" checked="checked" name="radio" value = "Digital Electronics">
  <span class="checkmark"></span>
</label>
<label class="container">Mathematis
  <input type="radio" name="radio" value = "Mathematis">
  <span class="checkmark"></span>
</label>
<label class="container">C programming
  <input type="radio" name="radio" value = "C programming">
  <span class="checkmark"></span>
</label>
<label class="container">Numerical Method
  <input type="radio" name="radio" value = "Numerical Method">
  <span class="checkmark"></span>
</label>

    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>


    <p>
      Already a member? <a href="adminlogin.php">Sign in</a>
    </p>
  </form>
</body>
</html>