


<?php

//session_start();

// initializing variables
$username = "";
$error = array(); 
//$errors = array(); 

// connect to the database
$db1 = mysqli_connect('localhost', 'root','', 'student_attendence');

// REGISTER USER
if (isset($_POST['reg'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db1, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db1, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db1, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($error, "Username is required"); }
  if (empty($password_1)) { array_push($error, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($error, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_reg WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
     if ($user) { // if user exists
      if ($user['username'] === $username) {
      array_push($error, "Username already exists");
      }
    }


  // Finally, register user if there are no errors in the form
  if (count($error) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
    $coursename = $_POST['radio'];
    $query = "INSERT INTO user_reg (username, password, coursename) 
          VALUES('$username', '$password', '$coursename')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index1.php');
  }

 }






if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($error, "Username is required");
  }
  if (empty($password)) {
    array_push($error, "Password is required");
  }

  if (count($error) == 0) {
    $password = md5($password);
    $coursename = $_POST['radio'];
    $query = "SELECT * FROM user_reg WHERE username='$username' AND password='$password' AND coursename = '$coursename'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
     $_SESSION['username'] = $username;
     $_SESSION['success'] = "You are now logged in";
      header('location: last_show.php');
    }

    else {
      array_push($error, "Wrong username/password combination/wrong course name");
    }
  }
}

?>