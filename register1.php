

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
   <h3>Select your session and course: </h3> 
  <select onchange="la(this.value)">
  <option value="session_course_select.php">2014-15</option>
  <option value="session_course_select.php">2015-16</option>
  <option value="session_course_select.php">2016-17</option>
  <option value="session_course_select.php">2017-18</option>
  </select>
  <script >
    function la(src){
      window.location = src;
    }

  </script>

    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>


    <p>
      Already a member? <a href="adminlogin.php">Sign in</a>
    </p>
  </form>
</body>
</html>