<?php
include('server1.php');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  //$course   = mysqli_real_escape_string($db, $_POST['coursename']);

  $session = $_POST['radio'];
  $course = "INSERT INTO  (CourseName) VALUES (' $session')";
  mysqli_query($db, $course);

  if (empty($username)) {
    array_push($error, "Username is required");
  }
  if (empty($password)) {
    array_push($error, "Password is required");
  }

  if (count($error) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM logincourse WHERE username='$username' AND password='$password' AND coursename = '$coursename'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
     $_SESSION['username'] = $username;
     $_SESSION['success'] = "You are now logged in";
      header('location: session.php');
    }

    else {
      array_push($error, "Wrong username/password combination");
    }
  }
}

?>