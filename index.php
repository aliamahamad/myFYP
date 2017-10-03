<?php
include'inc/dbconn.php';
session_start();

$error = '';
 if(count($_POST)>0){
 if (empty($_POST['email']) || empty($_POST['password'])){
  $error = "Username or Password is invalid";
 }
 else
 {

  $connection = mysqli_connect("localhost", "root", "", "srs");
  //Define $email and $password
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = mysqli_query($connection,"SELECT * FROM members WHERE email = '".$email."' AND password = '".$password."'");
  $row = mysqli_num_rows($query);

  if ($row == 0) {
    $error = "username is invalid";
  } else{
    while($rekod=mysqli_fetch_array($query)){

    $_SESSION['email'] = $email;

    if ($rekod['role'] == 'pengguna') {
      header("location: user/std_home.php");
    }
     if($rekod['role'] == 'admin'){
      header("location: admin/admin_home.php");
    }
    }
  }
  //mysql_close($connection);

 }
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title> Student Registration System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header" align="center">
          <b><h4> Log Masuk </h4></b>
        </div>
        <div class="card-body">
          <form action="" method="POST" role="form">
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" maxlength="8">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember Password
                </label>
              </div>
            </div>
            <div>
              <input class="btn btn-primary btn-block" type="submit" class="submit" value="Log masuk">
            </div>
            <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>