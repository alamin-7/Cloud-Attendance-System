<?php include('server1.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="courseCSS.css"
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="adminlogin.php">
    <?php include('error.php'); ?>
 
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
  
  <select onchange="la(this.value)">
  <option value="login_select.php">2014-15</option>
  <option value="login_select.php">2015-16</option>
  <option value="c">2016-17</option>
  <option value="d">2017-18</option>
  </select>
  <script >
    function la(src){
      window.location = src;
    }

  </script>

    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>

    <p>
      Not yet a member? <a href="register1.php">Sign up</a>
    </p>
  </form>
</body>
</html>